import Errors from './Errors';


class Form{
    constructor(data){

        this.originalData = data;

        for(let field in data){
            if (data.hasOwnProperty(field)){
                this[field] = data[field];
            }
        }

        this.errors = new Errors();
    }
    reset(){
        for(let field in this.originalData) {
            this[field]=null;
        }
    }


}

export default Form;
