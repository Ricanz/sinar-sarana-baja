<!DOCTYPE html>
<html>

<head>

    <title>Membuat Multi dropdown Menu dengan HTML dan CSS</title>

    <link rel="stylesheet" href="style.css" />

    <style>
        nav ul {
            background: #111;
            padding: 0 0px;
            list-style: none;
            position: relative;
            width: 100%;
            font-family: ‘helvetica’, arial;
        }

        nav ul:after {
            content: "";
            clear: both;
            display: block;
        }

        nav ul li {
            float: left;
        }

        nav ul li:hover {
            background-color: #222;

        }

        nav ul li a {

            display: block;
            padding: 20px 30px;
            text-decoration: none;
            color: #fff;

        }

        nav ul li a:hover {

            color: #fff;

        }

        nav ul ul {

            display: none;
            background: #111;
            padding: 0;
            position: absolute;
            top: 100%;
            max-width: 300px;
            width: auto;

        }

        nav ul ul li {

            float: none;
            border-bottom: 1px solid rgba(0, 0, 0, .2);
            position: relative;

        }

        nav ul li:hover>ul {

            display: block;

        }

        nav ul ul li a {

            padding: 10px 40px;
            color: #fff;

        }

        nav ul ul li a:hover {

            background: #222;

        }

        nav ul ul ul {

            position: absolute;
            left: 100%;
            top: 0;
            width: 200px;

        }
    </style>
</head>

<body>

    <nav>

        <ul>

            <li><a href="#">Beranda</a></li>

            <li><a href="#">Profil</a>

                <ul>

                    <li><a href="#">Profil 1</a></li>

                    <li><a href="#">Profil 2</a></li>

                </ul>

            </li>

            <li class="dropdown"><a href="#">Kategori</a>

                <ul>

                    <li><a href="#">CSS</a></li>

                    <li><a href="#">PHP</a></li>

                    <li><a href="#">Jquery</a></li>

                    <li><a href="#">HTML</a>
                        <ul>
                            <li><a href="#">Dasar HTML</a></li>

                            <li><a href="#">Tag HTML</a></li>

                        </ul>
                    </li>
                    <li><a href="#">Testing</a>
                        <ul>
                            <li><a href="#">Dasar HTML</a></li>

                            <li><a href="#">Tag HTML</a></li>

                        </ul>
                    </li>
                </ul>

            </li>

            <li><a href="#">Kontak</a></li>

        </ul>

    </nav>

</body>

</html>
