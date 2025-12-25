import PersonalInformation from "./PersonalInformation";
import ContactInformation from "./ContactInformation";
import BusinessInformation from "./BusinessInformation";
import CustomerLocationInformation from "./CustomerLocationInformation";

export default interface CustomerApiResult {
    id: number,
    customerGroup: number,
    isGuestAccount: boolean,
    isFavorite: boolean,
    personalInformation: PersonalInformation,
    contactInformation: ContactInformation,
    businessInformation: BusinessInformation,
    credit: number,
    addresses: CustomerLocationInformation,
    disallowedPaymentMethods: [],
    disallowedShippingMethods: [],
}