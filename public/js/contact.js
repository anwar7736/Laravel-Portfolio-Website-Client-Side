$(document).ready(function(){

	$('#MsgSendBtn').click(function(){
		let name    = $('#name').val();
		let contact = $('#contact').val();
		let email   = $('#email').val();
		let message = $('#message').val();
		sendMessage(name,contact,email,message);
	});
	function sendMessage(name,contact,email,message)
	{
		if(name.length==0)
		{
			$('#MsgSendBtn').html('আপনার নাম লিখুন');
			setTimeout(function(){
				$('#MsgSendBtn').html('পাঠিয়ে দিন');
			},2000);
		}
		else if(contact.length==0)
		{
			$('#MsgSendBtn').html('আপনার মোবাইল নাম্বার লিখুন');
			setTimeout(function(){
				$('#MsgSendBtn').html('পাঠিয়ে দিন');
			},2000);
		}
		else if(email.length==0)
		{
			$('#MsgSendBtn').html('আপনার ইমেল এড্রেস লিখুন');
			setTimeout(function(){
				$('#MsgSendBtn').html('পাঠিয়ে দিন');
			},2000);
		}
		else if(message.length==0)
		{
			$('#MsgSendBtn').html('আপনার মন্তব্য লিখুন');
			setTimeout(function(){
				$('#MsgSendBtn').html('পাঠিয়ে দিন');
			},2000);
		}
		else{
			$('#MsgSendBtn').html('পাঠানো হচ্ছে......');
			axios.post('/sendMessage',{
				name    : name,
				contact : contact,
				email   : email,
				message : message
			})
			.then(function(response){
				if(response.status==200)
				{
					if(response.data==1)
					{
						$('#MsgSendBtn').html('আপনার অনুরোধ সফল হয়েছে');
						setTimeout(function(){
							$('#MsgSendBtn').html('পাঠিয়ে দিন');
						},2000);
					}
					else{
						$('#MsgSendBtn').html('আপনার অনুরোধ ব্যর্থ হয়েছে, পুনরায় আবার চেষ্টা করুন');
						setTimeout(function(){
							$('#MsgSendBtn').html('পাঠিয়ে দিন');
						},2000);
					}
				}
				else{
					$('#MsgSendBtn').html('আপনার অনুরোধ ব্যর্থ হয়েছে, পুনরায় আবার চেষ্টা করুন');
						setTimeout(function(){
							$('#MsgSendBtn').html('পাঠিয়ে দিন');
					},2000);
				}
			})
			.catch(function(error){
				$('#MsgSendBtn').html('আপনার অনুরোধ ব্যর্থ হয়েছে, পুনরায় আবার চেষ্টা করুন');
				setTimeout(function(){
					$('#MsgSendBtn').html('পাঠিয়ে দিন');
				},2000);
			})
		}
	}
});