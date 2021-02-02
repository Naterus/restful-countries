class DocUrl{

    static getUrl(then) {
        return axios.get('/documentation/url').then(res => then(res.data))
    }
}

export default DocUrl;
