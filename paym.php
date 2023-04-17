<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link href="paymentform.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form method="POST" action="success.php">
            
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label for="bc2"><span><i class="fa fa-cc-debit"></i> Debit card</span></label>
                    <input type="radio" name="pay" id="bc21" class="radio">
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card Number" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card CVC" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <select>
                        <option>01 MARCH</option>
                        <option>02 MARCH</option>
                        <option>03 MARCH</option>
                        <option>04 MARCH</option>
                        <option>05 MARCH</option>
                        <option>06 MARCH</option>
                        <option>07 MARCH</option>
                        <option>08 MARCH</option>
                        <option>09 MARCH</option>
                        <option>10 MARCH</option>
                    </select>
                    <select>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    
                    <button value="pay Now!" type="submit" onclick="" type="button" class="btn btn-danger">Pay Now</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>



