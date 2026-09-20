<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        :root {
            font-family: Arial, Helvetica, sans-serif;
            color: #111;
            background: #fff;
        }

        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            padding: 48px 20px;
            background: #fff;
        }

        .profile {
            width: min(100%, 448px);
            text-align: center;
        }

        .avatar {
            position: relative;
            width: 254px;
            height: 254px;
            margin: 8px auto 56px;
            overflow: hidden;
            border: 2px solid #555;
            border-radius: 50%;
            background: #d8d8d8;
        }

        .avatar::before {
            content: "";
            position: absolute;
            top: 28px;
            left: 50%;
            width: 104px;
            height: 104px;
            transform: translateX(-50%);
            border-radius: 50%;
            background: #fff;
        }

        .avatar::after {
            content: "";
            position: absolute;
            bottom: -38px;
            left: 50%;
            width: 184px;
            height: 150px;
            transform: translateX(-50%);
            border-radius: 52% 52% 0 0;
            background: #fff;
        }

        .profile-data {
            display: grid;
            gap: 32px;
        }

        .profile-data p {
            min-height: 69px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 12px 20px;
            background: #d9d9d9;
            font-size: clamp(1.5rem, 4vw, 2.25rem);
            line-height: 1.2;
            overflow-wrap: anywhere;
        }

        @media (max-width: 480px) {
            body {
                padding-top: 32px;
            }

            .avatar {
                width: 210px;
                height: 210px;
                margin-bottom: 40px;
            }

            .avatar::before {
                width: 86px;
                height: 86px;
            }

            .avatar::after {
                width: 152px;
                height: 124px;
            }

            .profile-data {
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <main class="profile">
        <div class="avatar" aria-label="Foto profil placeholder"></div>

        <section class="profile-data" aria-label="Data profil">
            <p>{{ $nama }}</p>
            <p>{{ $kelas }}</p>
            <p>{{ $npm }}</p>
        </section>
    </main>
</body>
</html>