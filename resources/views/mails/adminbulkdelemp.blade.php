<h3>Hi, Admin</h3>
<p>You Have deleted this employee profile: Below are the details:</p>
<p><strong>Name:</strong> {{ $company->first_name }}</p>
<p><strong>Email:</strong> {{ $company->email }}</p>
<p><strong>Phone:</strong> {{ $company->phone ?? 'N/A' }}</p>

