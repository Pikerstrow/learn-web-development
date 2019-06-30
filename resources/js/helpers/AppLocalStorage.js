class AppLocalStorage {

    has(key){
        return window.localStorage.getItem(key) !== null ? true : false;
    }

    get(key){
        return window.localStorage.getItem(key);
    }

    set(key, value){
        window.localStorage.setItem(key, value);
    }

    remove(key){
        if(this.has(key)){
            window.localStorage.removeItem(key);
            return true;
        }
        return false;
    }

    clear(){
        window.localStorage.clear();
    }
}

export default AppLocalStorage = new AppLocalStorage();
