<!DOCTYPE html>
<html>
    <head>
    <title>Booking</title>
    <link rel="stylesheet" href="all.css">
    </head>
    <body>
        <div>
            <div>
                <form style="position: relative;" action="see.php" method="POST">
                    <div>
                    <h2>Enter Details</h2>
                    <div>
                        <div>
                            <label>Full Name</label><br>
                            <input type="text" required minlenght="10" name="name">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label>contact Number</label><br>
                            <input type="text" minlength="10" required name="phone" ><br>
                        </div>
                    </div>
                    <div>
                        <div>
                            <label>Email Address</label><br>
                            <input type="email" name="email" >
                        </div>
                    </div>
                    <div>
                        <div>
                            <label> Select Picture</label><br>
                            <input type="file" name="file" >
                        </div>
                    </div>
                    <div>
                        <div>
                            <label>Address</label><br>
                            <input type="text" name="address" >
                        </div>
                    </div>
                    <div>
                        <div>
                    <label>Time:</label><center><table><tr><td><input  type="radio" id="t1" name="time" value="6:00AM"><label>6:00AM- Malabar Express</label></td>
                    <td><input  type="radio" id="t2" name="time" value="12:00PM"><label>12:00AM- Superfast Express</label></td>
                    <td><input type="radio" id="t3" name="time" value="10:00PM"><label>10:00PM- Lavanya Express</label></td></tr></table></center>
</div>
</div><br>
<div>
                        <div>
                    <time>Date:</label><center><table><tr><td><input  type="radio" id="d1" name="date" value="22/06/2022"><label>22/06/2022</label></td>
                    <td><input  type="radio" id="d2" name="date" value="25/06/2022"><label>25/06/2022</label></td>
                    <td><input  type="radio" id="d3" name="date" value="22/06/2022"><label>22/06/2022</label></td></tr></table></center>
</div>
</div>
                    <div>
                        <div>
                            <br><button type="submit"><b>SUBMIT</b></button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
