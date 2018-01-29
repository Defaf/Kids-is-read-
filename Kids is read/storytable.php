<html>
<head><?php include"confing.php";
            include"projectheader.php";?></head>
<body>
    <section class="main">
                <div class="content">
                    <section class="bar">
                        <div class="bar-frame">
                            <ul class="breadcrumbs">
                                <li><a href="projectHome.php">Home</a></li>
                                <li>Stories</li>
                            </ul>
                        </div>
                    </section>
    <center>
    <table class="list_table">
                        <tr>
                            <td class="braun price">IMAGE STORY</td>
                            <td class="braun price">Action</td>
                        </tr>
                            </td>
                            <td class="white two"><?php echo '<img src="sharequery.php?DrowID=1" width="300" hight="500">';?></td>
                            <td class="white two"><form action="detailstory.php" class="form-newsletter">
                                <button type="submit" name="view" value="veiw">View Details</button>
                            </form>
                            </td>
                        </tr>
                    </table>
                </center>
<?php include "projectfooter.php"; ?>
</body>
</html>