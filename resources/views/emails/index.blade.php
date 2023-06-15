<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email </title>
</head>
<body >
    <form method="POST" action="{{url('/post-email-data')}}">
        @csrf
        <p>
            <label for="name">To Name</label>
            <input type="text" name="name" id="name" />
        </p>
        <p>
            <label for="email">To Email</label>
            <input type="text" name="email" id="email" />
        </p>
        <p>
            <label for="subject">Subject</label>
            <input name="subject" id="subject"></input>
        </p>
        <p>
            <label for="message">Message/Body</label>
            <textarea name="message" id="message"></textarea>
        </p>
        <p>
            <input type="submit" value="Send Email" />
        </p>
    </form>
    </form>
</body>
</html>