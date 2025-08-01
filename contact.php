<!DOCTYPE html>
<html lang="en">
<head>
    
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #f0f0f0;
    color: #333;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact {
    width: 90%;
    max-width: 1000px;
    background: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
}

.contact .content {
    text-align: center;
    margin-bottom: 40px;
}

.contact .content h2 {
    font-size: 32px;
    color: #2c3e50;
    margin-bottom: 10px;
}

.contact .content p {
    font-size: 16px;
    color: #555;
}

.container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.contactinfo {
    display: flex;
    flex-direction: column;
    gap: 30px;
    flex: 1;
}

.box {
    display: flex;
    align-items: center;
    background: #ecf0f1;
    padding: 20px;
    border-radius: 8px;
    transition: transform 0.3s ease;
}


.icon {
    font-size: 30px;
    color: #2980b9;
    margin-right: 20px;
    min-width: 40px;
    text-align: center;
}

.text h3 {
    font-size: 20px;
    margin-bottom: 5px;
    color: #333;
}

.text p {
    font-size: 16px;
    color: #666;
}

/* Responsive design */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .contactinfo {
        width: 100%;
    }

    .box {
        flex-direction: row;
    }
}

    </style>
</head>
<body>
    <div class="contact">
        <div class="content">
            <h2>Contact Us</h2>

        </div>
    <div class="container">
        <div class="contactinfo">
            <div class="box">
                <div class="icon">
                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                </div>    
                <div class="text">
                    <h3>Address</h3>
                    <p>145/7,Dheeran Street,<br>Perundurai,<br>Erode,<br>Tamil Nadu,<br>639060</p>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>98983 98983</p>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>smartevents@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
