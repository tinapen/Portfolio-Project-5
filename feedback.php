<?php include 'inc/header.php';

$sql = 'SELECT * FROM feedbacktable';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
   <section class="bg-blue-50 dark:bg-slate-800 h-[100vh] text-gray-600 dark:text-gray-100">
      <div class="py-[5vh] place-content-center px-[25vw]">
        <h2 class="text-center font-bold text-3xl mt-32 mb-10">People's Feedback</h2>

        <?php if (empty($feedback)): ?>
          <p class="lead mt-3">There is no feedback</p>
        <?php endif; ?>

        <?php foreach ($feedback as $item): ?>
        <div class="border border-gray-500 w-[50vw] p-[10px] my-3 rounded-lg bg-white/10 backdrop-blur-lg">
            <!-- Avatar, user name and date  -->
            <div class="flex"> 
            <img src="./img/user-svgrepo-com.svg" alt="user profile" class="me-2 rounded-full h-[30px]">
            <?php echo $item['name']; ?> | <?php echo date_format(date_create($item['date']), 'g:i A \o\n l\, F j\,\ Y'); ?></div>
            <!-- User's feedback / comments  -->
            <div class="text-start text-justify">
            <?php echo $item['message']; ?>
            </div>
        </div>
        <?php endforeach; ?>
      </div>
      </section>
      <?php include 'inc/footer.php' ?>