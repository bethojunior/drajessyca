class HomeController extends ConnectionServer{
    static create(data)
    {
        return new Promise(resolve => {
            this.sendRequest('schedule','POST',data,resolve,true,false)
        })
    }
}
