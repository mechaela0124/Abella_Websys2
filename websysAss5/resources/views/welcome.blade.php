<!DOCTYPE html>
<html>
<head>
    <title>Student Evaluation System</title>
</head>
<body>

    <h2>Student Evaluation Result</h2>

    <p><strong>Student Name:</strong> {{ $name }}</p>
    <p><strong>Prelim Grade:</strong> {{ $prelim }}</p>
    <p><strong>Midterm Grade:</strong> {{ $midterm }}</p>
    <p><strong>Final Grade:</strong> {{ $final }}</p>

    <hr>

    <h3>Results</h3>

    <p><strong>Average:</strong> {{ number_format($average, 2) }}</p>

    {{-- LETTER GRADE --}}
    @if($average >= 90 && $average <= 100)
        <p><strong>Letter Grade:</strong> A</p>
    @elseif($average >= 80)
        <p><strong>Letter Grade:</strong> B</p>
    @elseif($average >= 70)
        <p><strong>Letter Grade:</strong> C</p>
    @elseif($average >= 60)
        <p><strong>Letter Grade:</strong> D</p>
    @else
        <p><strong>Letter Grade:</strong> F</p>
    @endif

    {{-- REMARKS --}}
    @if($average >= 75)
        <p><strong>Remarks:</strong> Passed</p>
    @else
        <p><strong>Remarks:</strong> Failed</p>
    @endif

    {{-- ACADEMIC AWARD --}}
    @if($average >= 98 && $average <= 100)
        <p><strong>Award:</strong> With Highest Honors</p>
    @elseif($average >= 95)
        <p><strong>Award:</strong> With High Honors</p>
    @elseif($average >= 90)
        <p><strong>Award:</strong> With Honors</p>
    @else
        <p><strong>Award:</strong> No Award</p>
    @endif

</body>
</html>
