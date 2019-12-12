const store = {
    setLocal(index, value) {
        localStorage.setItem(index, value);
    },
    setSession(index, value) {
        sessionStorage.setItem(index, value);
    },
    getLocal(index) {
        return localStorage.getItem(index);
    },
    getSession(index) {
        return sessionStorage.getItem(index);
    }
};