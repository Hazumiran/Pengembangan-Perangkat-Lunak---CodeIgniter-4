<!doctype html>
<html>

<head>
    <title>My Layout</title>
</head>

<body>
    <table border="2" width="100%">
        <tr>
            <td colspan="2"> HEADERS</td>
        </tr>

        <tr>
            <td>
                <a href="/Helloworld"> Home</a>
                <a href="/Mahasiswa">Info</a>
                <a href="/logout">Logout</a>
            </td>
        </tr>


        <tr>
            <td>
                <?= $this->renderSection('content') ?>
            </td>
        </tr>

        <tr>
            <td> Footer</td>
        </tr>
    </table>

</body>

</html>