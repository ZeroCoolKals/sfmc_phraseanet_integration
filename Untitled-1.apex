
    Platform.Load("core","1");
    var username = 'xxxxxx';
    var password = 'xxxxx!';
    var payload = '';
    var endpoint = "https://webservice.s7.exacttarget.com/Service.asmx";
    var result;

payload += '<?xml version="1.0" encoding="utf-8"?>';
payload += '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">';
payload += '   <soapenv:Header>';
payload += '      <wsse:Security soapenv:mustUnderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">';
payload += '         <wsse:UsernameToken wsu:Id="UsernameToken-32259181" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">';
payload += '            <wsse:Username>' + username + '</wsse:Username>';
payload += '            <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">' + password + '</wsse:Password>';
payload += '         </wsse:UsernameToken>';
payload += '      </wsse:Security>';
payload += '   </soapenv:Header>';
payload += '   <soapenv:Body>';
payload += '        <RetrieveRequestMsg xmlns="http://exacttarget.com/wsdl/partnerAPI">';
payload += '            <RetrieveRequest>';                     
payload += '                <ObjectType>AccountUser</ObjectType>';
payload += '            </RetrieveRequest>';
payload += '        </RetrieveRequestMsg>';
payload += '   </soapenv:Body>';
payload += '</soapenv:Envelope>';

try {
    result = HTTP.Post(endpoint,"text/xml",payload,["SOAPAction"],["Retrieve"]);
}catch(e) {
    result = {StatusCode:500,Response:Stringify(e)};    
}

if (result.StatusCode != 200) {
    //Bad response
    Write(Stringify(result));
} else {
    //Good response
    Write(Stringify(result));
}




<h1>
    PHRASEANET SERVER
</h1>
<script runat="server">
    Platform.Load("core", "1");

    var jsonData = Platform.Request.GetPostData();
    var asset = Platform.Function.ParseJSON(jsonData);

    var end_point = "";
    var accessToken = "";
    var categories_path = "asset/v1/content/categories/?$pagesize=20";
    var contentType = 'application/json';
    var token_lifetime = 0;

    function auth() {
        var authEndpoint = 'https://mcc2gk-bp085x9503lcvgdlxx944.auth.marketingcloudapis.com';
        var url
            = authEndpoint + '/v2/token';

        var payload = {
            client_id: "6jbz9ag4cdwumfc6x4s7fcjx",
            client_secret: "Z5b6GIstJzY5BcuLKp9UcAEC",
            grant_type: "client_credentials"
        };

        try {
            var accessTokenRequest = HTTP.Post(url, contentType, Stringify(payload));

            if (accessTokenRequest.StatusCode == 200) {
                var response_body = Platform.Function.ParseJSON(accessTokenRequest.Response[0]);
                accessToken = response_body.access_token;
                end_point = response_body.rest_instance_url;
                token_lifetime = response_body.expires_in;
            }
        } catch (error) {
            // Write(Stringify(error));
        }

        Write("token life cycle " + token_lifetime);

    }

    function getCategories() {

        auth();

        var req = new Script.Util.HttpRequest(end_point + categories_path);
        req.emptyContentHandling = 0;
        req.retries = 2;
        req.continueOnError = true;
        req.contentType = "application/json"
        req.method = "GET";
        req.setHeader("Authorization", "Bearer " +accessToken);

        try {

            var resp = req.send();
            var resultStatusStr = String(resp.statusCode);
            var resultContentStr = String(resp.Content);
            var resultStatusJSON = Platform.Function.ParseJSON(resultStatusStr);
            var resultContentJSON = Platform.Function.ParseJSON(resultContentStr);
            Write('<br>resultContentJSON: ' + Stringify(resultContentJSON));

            if (resultStatusStr == 200) {
                // send results

               // Write('<br>resultStatusJSON: ' + Stringify(resultStatusJSON));

            } else {
                Write('error')
            }

        } catch (error) {
            // Write(Stringify(error));
        }
    }

    getCategories();


   


</script>