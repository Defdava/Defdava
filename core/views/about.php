<?php
session_start();

class Stack {
    private $stack;
    private $limit;

    public function __construct($limit = 10) {
        $this->stack = isset($_SESSION['stack']) ? $_SESSION['stack'] : array();
        $this->limit = $limit;
    }

    public function push($item) {
        if (count($this->stack) < $this->limit) {
            array_push($this->stack, $item);
            $_SESSION['stack'] = $this->stack;
        } else {
            echo "Stack is full!";
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
            return "Stack is empty!";
        } else {
            $item = array_pop($this->stack);
            $_SESSION['stack'] = $this->stack;
            return $item;
        }
    }

    public function isEmpty() {
        return empty($this->stack);
    }

    public function display() {
        return $this->stack;
    }
}

class Queue {
    private $queue;
    private $limit;

    public function __construct($limit = 10) {
        $this->queue = isset($_SESSION['queue']) ? $_SESSION['queue'] : array();
        $this->limit = $limit;
    }

    public function enqueue($item) {
        if (count($this->queue) < $this->limit) {
            array_push($this->queue, $item);
            $_SESSION['queue'] = $this->queue;
        } else {
            echo "Queue is full!";
        }
    }

    public function dequeue() {
        if ($this->isEmpty()) {
            return "Queue is empty!";
        } else {
            $item = array_shift($this->queue);
            $_SESSION['queue'] = $this->queue;
            return $item;
        }
    }

    public function isEmpty() {
        return empty($this->queue);
    }

    public function display() {
        return $this->queue;
    }
}

$businessStack = new Stack();
$businessQueue = new Queue();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["action"] == "add-to-stack") {
        $item = htmlspecialchars($_POST['stack-item']);
        if ($item) {
            $businessStack->push($item);
        }
    } elseif ($_POST["action"] == "remove-from-stack") {
        $businessStack->pop();
    } elseif ($_POST["action"] == "add-to-queue") {
        $item = htmlspecialchars($_POST['queue-item']);
        if ($item) {
            $businessQueue->enqueue($item);
        }
    } elseif ($_POST["action"] == "remove-from-queue") {
        $businessQueue->dequeue();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="margin-top:150px">
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-image">
                            <img src="assets/images/about-left-image.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-content">
                            <h4>About &amp; Our Skills</h4>
                            <span>Ideocom is a service that provides websites to users, especially business people. This is due to improving business collaboration services that are flexible and easy for collaborators to reach.</span>
                            <div class="quote">
                                <i class="fa fa-quote-left"></i><p>Flexibility will provide convenience and improvement in the future</p>
                            </div>
                            <p>We have conducted research regarding the responsiveness of several respondents, that this website will be very "useful" for entrepreneurs, especially MSMEs in Indonesia.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stack and Queue Form -->
        <div class="form-section" style="margin-top:50px">
            <div class="container">
                <h2>Manage Stack and Queue</h2>
                <form method="POST" action="">
                    <div>
                        <label for="stack-item">Add to Stack:</label>
                        <input type="text" id="stack-item" name="stack-item">
                        <button type="submit" name="action" value="add-to-stack">Add</button>
                        <button type="submit" name="action" value="remove-from-stack">Remove</button>
                    </div>
                    <br>
                    <div>
                        <label for="queue-item">Add to Queue:</label>
                        <input type="text" id="queue-item" name="queue-item">
                        <button type="submit" name="action" value="add-to-queue">Add</button>
                        <button type="submit" name="action" value="remove-from-queue">Remove</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Stack Section -->
        <div class="stack-section" style="margin-top:50px">
            <div class="container">
                <h2>Business Stack</h2>
                <?php
                echo "<ul>";
                foreach (array_reverse($businessStack->display()) as $item) {
                    echo "<li>" . htmlspecialchars($item) . "</li>";
                }
                echo "</ul>";
                ?>
            </div>
        </div>

        <!-- Queue Section -->
        <div class="queue-section" style="margin-top:50px">
            <div class="container">
                <h2>Business Queue</h2>
                <?php
                echo "<ul>";
                foreach ($businessQueue->display() as $item) {
                    echo "<li>" . htmlspecialchars($item) . "</li>";
                }
                echo "</ul>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
