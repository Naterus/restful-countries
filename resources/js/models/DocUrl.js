class DocUrl{

    static getUrl(then) {
        return axios.get('/documentation/url').then(res => then(res.data))
    }
    static getAppUrl(then){
        return axios.get('/app/url').then(res => then(res.data))
    }
    static getVersions(then){
        return axios.get('/app/versions').then(res => then(res.data))
    }
}

export default DocUrl;
