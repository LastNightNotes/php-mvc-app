export class AddressBook{
    contacts = [];
    initialComplete = false;

    addContact(contact){
        this.contacts.push(contact);
    }

    async getInitialContacts(){
        await fetch('./SpecRunner.html');  
        this.initialComplete = true;
    }

    getContact(index){
        return this.contacts[index];
    }

    deleteContact(index){
        this.contacts.splice(index, 1);
    }

}
