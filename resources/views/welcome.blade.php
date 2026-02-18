<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biodata Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        .profile-card {
            max-width: 900px;
            margin: auto;
            background: #dce9ec;
            border: 1px solid #ccc;
        }

        .header {
            display: flex;
            background: #4c8791;
            color: white;
            padding: 20px;
        }

        .photo {
            width: 200px;
            height: 250px;
            background: white;
            padding: 5px;
            margin-right: 20px;
        }

        .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .basic-info h2 {
            margin: 0 0 10px;
        }

        .basic-info p {
            margin: 4px 0;
            font-size: 14px;
        }

        .section {
            padding: 20px;
            border-top: 1px solid #bbb;
        }

        .section h3 {
            margin-top: 0;
            border-bottom: 2px solid #bbb;
            padding-bottom: 5px;
            color: #333;
        }

        .section p {
            font-size: 14px;
            line-height: 1.6;
        }

        .details p {
            margin: 5px 0;
            font-size: 14px;
        }

        .footer {
            padding: 15px 20px;
            border-top: 1px solid #bbb;
            background: #eaf2f4;
        }
    </style>
</head>
<body>

<div class="profile-card">

    <!-- HEADER -->
    <div class="header">
        <div class="photo">
            <img src="{{ asset('images/profile1.jpg') }}" alt="Profile Photo">
        </div>

        <div class="basic-info">
            <h2>Mechaela Batjer Abella</h2>
            <p><strong>Age:</strong> 21</p>
            <p><strong>Date of Birth:</strong> 03-24-2004</p>
            <p><strong>Place of Birth:</strong> Samon Santa Maria Pangasinan</p>
            <p><strong>Place of Residence:</strong> 117 Samon Santa Maria Pangasinan</p>
            <p><strong>Nationality:</strong> Filipino</p>
            <p><strong>Religion:</strong> Roman Catholic</p>
            <p><strong>Caste:</strong> Rajput</p>
            <p><strong>Education:</strong> BS in Information Technology</p>
            <p><strong>Languages:</strong> English,Filipino</p>
        </div>
    </div>

    <div class="section">
        <h3>About Me</h3>
        <p>
           Passionate about learning and driven to succeed in the It Industry,
           with a focus on innovative technologies and collaborative problem-solving.
           Skilled at adapting to new challenges and delivering high-quality solutions
            to drive business growth and success.
        </p>
    </div>


    <div class="section details">
        <h3>Family Background</h3>
        <p><strong>Father's Name:</strong>Alfredo Abella</p>
        <p><strong>Mother's Name:</strong> Sylvia Abella</p>
        <p><strong>No. of Brothers:</strong> 1</p>
        <p><strong>No. of Sisters:</strong> 2</p>
        <p><strong>Social Class:</strong> Upper-Middle</p>
        <p><strong>Place of Residence:</strong> Santa Maria Pangasinan</p>
    </div>

    <div class="section">
        <h3>Expectations</h3>
        <p>
            I am at a stable stage of my career and have reached satisfactory experience and self-sufficiency.
            I am looking for a professionally stable and financially independent partner who knows his worth yet
            remains respectful of others.
        </p>
    </div>

    <div class="footer">
        <h3>Contact Details</h3>
        <p><strong>Phone Number:</strong> 0916 720 0948</p>
        <p><strong>Residence Address:</strong> Santa Maria Pangasinan</p>
    </div>

</div>

</body>
</html>
