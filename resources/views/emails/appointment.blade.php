<h1>Tv Mounting Appointment Details</h1>
<p><strong>Date:</strong> {{ $details['date'] }}</p>
<p><strong>Time:</strong> {{ $details['time'] }}</p>
<p><strong>First Name:</strong> {{ $details['name'] }}</p>
<p><strong>last Name:</strong> {{ $details['last_name'] }}</p>
<p><strong>Phone:</strong> {{ $details['phone'] }}</p>
<p><strong>Email:</strong> {{ $details['email'] }}</p>
@if(!empty($details['generalMounting']))
<p><strong>What are you mounting:</strong> {{ $details['mounting'] }}</p>
<p><strong>Is $70 per hour okay:</strong> {{ $details['status'] }}</p>
@else
<p><strong>TV Size:</strong> {{ $details['tv_size'] }}</p>
<p><strong>How many TVs:</strong> {{ !empty($details['many_tv']) ?  $details['many_tv']:''}}</p>
<p><strong>Type of wall:</strong> {{ $details['wall'] }}</p>
<p><strong>Will someone be around to help:</strong> {{ $details['around_to_help'] }}</p>
<p><strong>Will you be hiding the cords:</strong> {{ $details['cords'] }}</p>
<p><strong>Do you have a mount for the TV:</strong> {{ $details['mount_for_the_TV'] }}</p>
<p><strong>More Information:</strong> {{ $details['more_information'] }}</p>
<p><strong>Is $90 per TV okay:</strong> {{ $details['status'] }}</p>
@endif