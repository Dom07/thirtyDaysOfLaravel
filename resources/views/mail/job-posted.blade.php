<h2>
    {{ $job->title }}
</h2>

<div>
    <p>Let all your things have their places; let each part of your business have its time.</p>
    <p>- Benjamin Franklin </p>
</div>

<div>
    <p>
        <a href="{{ url('/jobs/' . $job->id) }}">View your job listing</a>
    </p>
</div>