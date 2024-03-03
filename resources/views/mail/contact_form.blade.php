<!DOCTYPE html>
<html>

<head>
<title>Contact Form | Tejarah Website</title>
</head>

<body>
<ul>
<li>Full Name: {{ $first_name }}  {{ $family_name }}</li>
<li>Email: {{ $email }}</li>
<li>Phone: {{ $phone }}</li>
<li>Company Name: {{ $company_name ?? 'none' }}</li>
<li>CR: {{ $cr ?? 'none' }}</li>
<li>Interested In: {{ $interested_in ?? 'none' }}</li>
</ul>

</body>

</html>
