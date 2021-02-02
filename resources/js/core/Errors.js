class Errors{
    constructor(){
        this.errors = new Map();
    }

    get(field){

        if(this.errors){
            return this.errors.get(field)
        }
    }
    record(errors){

        let obj = errors.errors;
        let map = new Map();

        for (let key in obj) {
            if (obj.hasOwnProperty(key)){
                map.set(key, obj[key][0]);
            }
        }
        this.errors = map;

    }

    clear(field){
        this.errors.delete(field)
    }

    any(){
        return this.errors.size > 0;
    }
}

export default Errors;
