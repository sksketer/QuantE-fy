import React,{Component} from 'react';
import '../../css/Topics/topic.css';

const Divisibility = () => {
    return (
        <div className="main-heading">
            <h2>Divisibility</h2>
            <h4><p>Quick Revision</p></h4>
            <div className="tips">
            <p className="def"><b>Divisibility by 2 :</b> A number is divisible by 2 of its unit place(last digit) is even.</p>
            <p className="def"><b>Divisibility by 3 :</b> A number is divisible by 3 if its digital sum  is divisible by 3.</p>
            <p className="def"><b>Divisibility by 4 :</b> A number is divisible by 4 if the last 2 digits is divisible by 4.</p>
            <p className="def"><b>Divisibility by 5 :</b> A number is divisible by 5 if its unit place is either 0 or 5.</p>
            <p className="def"><b>Divisibility by 6 :</b> A number is divisible by 6 if it is divisible by both 2 and 3.</p>
            <p className="def"><b>Divisibility by 8 :</b> A number is divisible by 8 if its last 3 digits is divisible by 8.</p>
            <p className="def"><b>Divisibility by 9 :</b> A number is divisible by 9 if its digital sum is divisible by 9.</p>
            <p className="def"><b>Divisibility by 10 :</b> A number is divisible by 10 if its unit digit is 0.</p>
            <p className="def"><b>Divisibility by 11 :</b> A number is divisible by 11 if the differences of sum of digits in the odd places and sum of digits in ven places is either multiple of 11 or 0.</p>
            <p className="def"><b>Note :</b>  Digital sum means sum of all the digits of a number until it gets converted to a digit. for Example : 1389  = 1+3+8+9 = 21 = 2+1 = 3 </p>
            <h2><p><u> Questions for practice</u></p><br></br></h2>
            
            <p className="def"><b> 1) If a positive integer n is divided by 5 the remainder is 3.Which of the following number below yeilds a remainder of 0 when it is divided by 5? </b><br></br>
                        a)n+3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        b)n+2   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       c)n+1     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     d)n-2        <br></br>
                        <b>Sol. </b>n=5k+3 <br></br>add both sides by 2 <br></br>n+2=5k+5 <br></br>hence the above equation suggests that n+2 divided by 5 yeilds a remainder equals to zero. </p><br></br>
            <p className="def"><b> 2) If an integer n is divisible by 3 ,5 and 12 what is the next larger integer divisible by all these numbers ?</b><br></br>
                        a)n+3  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      b)n+5   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       c)n+12    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     d)n+60         <br></br>
                        <b>Sol. </b>if n is divisible by 3,5 and 12 <br></br> so it must be multiple of 60 <br></br> n=60k <br></br>n+60=60k+60 <br></br>so the answer is n+60</p><br></br>
            <p className="def"><b> 3) What is the smallest integer that is multiple of 5 , 7 and 20 ?</b><br></br>
                        a)70&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         b)35&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           c)200&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           d)140        <br></br>
                        <b>Sol. </b>it is thenlcm of 5,7 and 20 which is 140</p><br></br>
                        
            <p className="def"><b> 4) When the integer n is divided by 8 the remainder is 3 .what is the remainder if 6n is divided by 8?</b><br></br>
                        a)0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        b)1  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        c)2    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        d)4           <br></br>
                        <b>Sol. </b>n=8k+3 <br></br> multiply all terms by 6 <br></br>6n=6*(8k+3) <br></br>6n=8*(6k+2)+2 <br></br>the above solution indicates that if 6n is divided by 8 if leaves a remainder 2.</p><br></br>
            <p className="def"><b> 5) If n is an integer when (2n+2)^2 is divided by 4 the remainnder is </b><br></br>
                        a)0 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         b)1    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        c)3      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       d)4          <br></br>
                        <b>Sol. </b>(2n+2)^2= 4n^2+8n+4 <br></br>factor 4 out 4(n^2+2n+1) <br></br>(2n+2)^2 is dividible by 4 then the remander is 0 </p><br></br>
            <p className="def"><b> 6) What is the smallest positive 2 digit whole number divisible by 3 and such that the sum of its digit is 9?</b><br></br>
                        a)27    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     b)33    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       c)72   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       d)18    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      e)90         <br></br>
                        <b>Sol. </b>10x+y=3k <br></br>x+y=9 <br></br>y=9-x <br></br>10x+9-x=3k <br></br>x=(k-3)/3 <br></br>hence the number we are looking for is 18.</p><br></br>
            <p className="def"><b> 7) Which of the following is not divisible by 3 ?</b><br></br>
                        a)339   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     b)342   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        c)552   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     d)1111   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      e)672        <br></br>
                        <b>Sol. </b>a) 339 digital sum (3+3+9)=6 which is divisible by 3 <br></br>b) 342 digital sum (3+4+2)=9 which is divisible by 3 <br></br>c) 552 digital sum (5+5+2)=3 which is divisible by 3 <br></br>d) 1111 digital sum (1+1+1+1)=4 which is not divisible by 3 <br></br>e) 672 digital sum (6+7+2) =9 which is divisible by 3</p><br></br>
            
            
            </div>
        </div>

    )
}

export default Divisibility;