<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form onsubmit="return false">
    <input type="text" size="30" value="Focus here and press enter">
    <input type="text" name="msg" value="" id="msg">
    <input type="text" name="receiver_id" value="82" id="receiver_id">
    <input type="text" name="sender_id" value="{{Auth::user()->user_id}}" id="sender_id">
    <input type="submit" value="Submit" onclick="writeUserData(document.getElementById('msg').value,document.getElementById('receiver_id').value,document.getElementById('sender_id').value)">
</form>
<div id="postElement"></div>
<ul id="results">

</ul>

</body>
</html>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.8.3/firebase.js"></script>
<script>
    var AuthUser = "{{{ (Auth::user()->user_id) }}}";
//    console.log(AuthUser);
</script>
<script>

    var config = {
        apiKey: "AIzaSyDBbTYOseEy4ZsLhQ4MjPySkXDjxsJZYM0",
        authDomain: "releasur.firebaseapp.com",
        databaseURL: "https://releasur.firebaseio.com",
        projectId: "releasur",
        storageBucket: "releasur.appspot.com",
        messagingSenderId: "569745296417"
    };
//    initializing firebase
    firebase.initializeApp(config);

    var database = firebase.database();
    var form = document.createElement('form');
    form.action = 'writeUserData';
    form.method = 'POST';
    function writeUserData(msg, receiver_uuid,sender_uuid)
    {

        if(receiver_uuid < sender_uuid)
        {
            var one = receiver_uuid;
            var two = sender_uuid;
        }
        else
        {
            var one = sender_uuid;
            var two = receiver_uuid;
        }
//        pushing chat to user_message database
        firebase.database().ref('user_messages/'+one+'_'+two).push({
            msg: msg,
            receiver_uuid: receiver_uuid,
            sender_uuid: sender_uuid,
        });
//        getting sender data from users table
        var sender_uuid = firebase.database().ref('users/'+ AuthUser);
        sender_uuid.on('value', function(snapshot) {
            var tdata = snapshot.val();
            var sender_name = tdata.name;
            var sender_uuid = tdata.uuid
        });
//        div id postElement to print result
        var postElement = document.getElementById("postElement");

//        function that sort the foreach loop in items
        var updateStarCount = function(element, value)
        {
            jQuery.each(value, function(i, item)
            {
//                console.log(item.msg)
                element.append(+item.msg);
            });
        };
//      getting messages of specific notes
        var starCountRef = firebase.database().ref('user_messages/'+one+'_'+two);

        starCountRef.on('value', function(snapshot)
        {
            console.log(snapshot.val());
//            printing data using listener in div
            updateStarCount(postElement, snapshot.val());
        });
    }
</script>