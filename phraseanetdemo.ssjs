<script runat=server>
    Platform.Load("core","1");
    var end_point = "https://teranga-cloud.xidmapreview.com/api/v1/";
    var api_key = "oauth_token=ydfwryYOCUGLRwEBj7C9m7ipSsUnksGr";
    var path = "/search/";
    var query ="";
    var record_type = "";
    var per_page = "&per_page=20";
    var data ;

    if(query){
        var url = end_point+path+api_key+per_page;
        if(record_type) url +=  "&record_type" +record_type; 
        var response = Platform.Function.HTTTPost(url);
        var obj = Platform.Function.ParseJSON(response);
        if(response.meta.http_code == 200){
            data = response.response.results;
            Write(data);
        }
    }
</script>

