import React,{Component} from 'react';
import '../../css/Topics/topic.css';

const Average = () => {
    return (
            <div className="main-heading">      
                    <h1>Average</h1><br></br>
                    <h2><p><u>Quick Revision</u></p></h2><br></br>
                    <div className="tips">
                        <p className="def"><b>Average: </b>An average is a single number taken as a representative of a non-empty list of numbers. </p>
                        <p className="def"><b> Let's suppose there are n number of terms and your are to find average of these n terms, then average: </b>  </p>
                        <p className="def"><b>Average = </b> Sum of n terms / Number of terms. </p>
                        <p className="def"><b> Sum of all terms =</b> Average of terms * Number of all terms.  </p><br></br>
                        
                        <h2><p><u> Questions for practise </u></p><br></br></h2> 
                        
                        <p className="def"><b> Q.1</b><b>Find the average of all prime numbers between 60 and 90?</b><br></br> <br></br>
                        <b>Sol.</b> Prime numbers between 60 and 90 =  61, 67, 71, 73, 79, 83 and 89 <br></br>Average = 61+67+71+73+79+83+89 / 7 = Avg= 523/7 = 74.75.   </p><br></br>
                        <p className="def"><b> Q.2</b> <b>A batsman in his 12th innings scores 63 runs and there by increases his average score by 2. What is his average after 12th inning?</b> <br></br><br></br> <b>Sol.</b>Let average runs upto 11 innings be x.<br></br>Total runs upto 11 innings = 11x.<br></br>Average runs upto 12 inning= (x+2).<br></br>Total runs upto 12 inning = (x+2)*12 = 12x + 24.<br></br>11x+63 = 12x+24 = x= 63-24= 24<br></br> Average after 12th inning= x+2= 41.</p><br></br>

                        <p className="def"><b>Q.3</b><b>In a family of 8, the men eat on average 72kg of food and women eat on an average 50kg of food. The men and women are equal in number. A hungry woman named Neetu joined the family for dinner and the average consumption became 67.How much did Neetu eat (in kgs)? </b> <br></br><br></br> <b>Sol.</b>As men and women are equal so , there are 4 women and 4 men. So,<br></br> Total Consumption will be 72×4 = 288(by men) and 50×4 = 200(by women)<br></br>Total consumption = 488.<br></br>But after including Neetu the average consumption for 9 people is given to be 67.<br></br>So the total consumption will be 67×9 = 603. <br></br>So, Neetu’s consumption will be = 603 – 488 = 115 </p><br></br>   

                        <p className="def"><b>Q.4 </b><b> If the average number of 8 terms is given to be 40 and the average of first 6 terms is given to be 35.What is the average of the remaining 2 terms?</b> <br></br><br></br> <b>Sol.</b>Sum of all the 8 terms = 320.<br></br>The sum of first 6 terms = 210<br></br>Now , the sum of remaining terms = 320 – 210 = 110<br></br>So , the average of 2 terms would be = 110/2 = 55 </p><br></br>

                        <p className="def"><b>Q.5 </b> <b>In a hotel, the tariff for every odd dates is Rs.1000 and for even dates is Rs. 2000. If the man paid total of 30000 in all. For how many days did he stay in the hotel given that the first day is 5th date of the month?</b><br></br><br></br> <b>Sol.</b>Total tariff = 30000<br></br>So, for odd dates (5th , 7th , and so on) = 1000<br></br>And for even dates (6th , 8th and so on ) = 2000<br></br>So, the average amount of money for 2 days is Rs. 1500.<br></br>So, total amount paid = 30000<br></br>So , number of days he stayed in the hotel = 30000/1500 = 20. </p><br></br>
                        
                        <p className="def"><b>Q.6</b><b>The average age of A, B and C was 25 years and that of B and C was 25 years. Find A’s present age?</b><br></br><br></br> <b>Sol.</b>Average of A,B,C is 25<br></br>So, sum of their ages =75<br></br>Now, the sum of B and C will be 50 (because their average is 25)<br></br>So age of A =75 - 50 = 25 years </p><br></br>
                        
                        <p className="def"><b>Q.7</b><b>The average marks of 13 papers is 40. The average marks of the first 7 papers are 42 and that of the last seven papers is 35. Find the marks obtained in the 7th paper.</b><br></br><br></br> <b>Sol.</b>The average of 13 papers is 40, so the sum = 13 × 40 = 520<br></br>The average of first 7 papers is 42, so the sum will be = 7 × 42 = 294<br></br>The average of last 7 papers is 35, so the sum will be = 7×35 = 245<br></br>So, the marks obtained in the 7th paper will be = 539 – 520 = 19 </p><br></br>

                        <p className="def"><b> Q.8</b><b>The average salary of 30 officers in a firm is Rs.120 and the average salary of laborers is Rs. 40. Find the total number of laborers if the average salary of the firm is Rs. 50.</b><br></br><br></br><b>Sol.</b>The sum of salary of officers will be = 30×120 = 3600Let the number of labourers = X.<br></br>ATQ, 3600 + 40X = 50(30+X)<br></br>2100 = 10X<br></br>X= 210  </p><br></br>
                        <h2><p><u> More Questions</u></p><br></br></h2>
                        <p className="def"><b> Q.1</b><b>The average weight of 8 person's increases by 2.5 kg when a new person comes in place of one of them weighing 65 kg. What might be the weight of the new person?</b>  </p><br></br>
                        
                        <p className="def"><b> Q.2</b><b>The average weight of 16 boys in a class is 50.25 kg and that of the remaining 8 boys is 45.15 kg. Find the average weights of all the boys in the class.</b>  </p><br></br>
                        
                        <p className="def"><b>Q.3 </b><b>A library has an average of 510 visitors on Sundays and 240 on other days. The average number of visitors per day in a month of 30 days beginning with a Sunday is?</b>  </p><br></br>
                        
                        <p className="def"><b>Q.4 </b><b>A pupil's marks were wrongly entered as 83 instead of 63. Due to that the average marks for the class got increased by half (1/2). The number of pupils in the class is?</b>  </p><br></br>
                        
                        <p className="def"><b>Q.5 </b><b>The captain of a cricket team of 11 members is 26 years old and the wicket keeper is 3 years older. If the ages of these two are excluded, the average age of the remaining players is one year less than the average age of the whole team. What is the average age of the team?</b>  </p><br></br>
                        
                    </div>
            </div>

    )
}

export default Average;