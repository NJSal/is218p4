<?php include('views/abstract-views/header.php'); ?>
<div class="display">
    <table class="table" align="center">

    <h1>User:
    <?php

        echo $username;
    ?>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="display_allusersquest">
            <input type="hidden" name="userId" value="<?php echo $userId; ?>">
            <input type="submit" value="Questions for Everyone" class="btn">
        </form>


    </h1>
    <tr>

        <!--
        <th scope = "col">Email</th>
        -->
        <th scope = "col">Id</th>
        <th scope = "col">Question Title</th>
        <th scope = "col">Question Body</th>
        <th scope = "col">Skills</th>

    </tr>
    <?php foreach ($questions as $question) : ?>
        <tr>
            <td><?php echo $question['id']; ?></td>
            <td><?php echo $question['title']; ?></td>
            <td><?php echo $question['body']; ?></td>
            <td><?php echo $question['skills']; ?></td>
            <td>
                <form action="index.php" method="get">
                    <input type="hidden" name="action" value="display_single_question">
                    <input type="hidden" name="id" value = "<?php echo $question['id'];?>">
                    <input type="hidden" name="userId" value = "<?php echo $userId;?>">
                    <input type="submit" value="View Question">
                </form>
            </td>


            <td><form action="index.php" method="post">
                    <input type="hidden" name="action" value="delete_question">
                    <input type="hidden" name="id" value = "<?php echo $question['id'];?>">
                    <input type="hidden" name="userId" value = "<?php echo $userId;?>">
                    <input type="submit" value="Delete">
                </form></td>
        </tr>
        <!--
        <button2>
            <a href = ".?action=display_question_form&userId=<?php echo $userId ?>">Add Question</a>
        </button2>
        -->
    <?php endforeach; ?>
</table>
    <button2>
        <a href = ".?action=display_question_form&userId=<?php echo $userId ?>">Add Question</a>
    </button2>
</div>
<?php include ('views/abstract-views/footer.php'); ?>

