OAuth.callback('twitter', function(error, success){
	var url = "https://api.twitter.com/1.1/account/verify_credentials.json";
	var option = {
		"include_entities": false,
		"skip_status": true,
		"oauth_token": success.oauth_token
	};
	$.get(url, option, function(res) {
		debugger;
		console.log(res);
	}, "json")

	//console.log(success);
	var num = 1;
	var key = "user-" + num;
	key = key + "";
	localStorage.setItem("user_id", num);
	//console.log(localStorage.getItem("user_id"));
	//console.log(key);

	var login_user_data = {
		"user_id": num,
		"oauth_token": success.oauth_token,
		"oauth_token_secret": success.oauth_token_secret
	};

	//console.log(JSON.stringify(login_user_data));
	localStorage.setItem(key, JSON.stringify(login_user_data));

	var user_data = JSON.parse(localStorage.getItem(key));
	//console.log(user_data);
});