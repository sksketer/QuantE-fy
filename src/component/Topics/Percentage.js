import React,{Component} from 'react';
import '../../css/Topics/topic.css';

const Percentage= () => {
    return (
            <div className="main-heading">      
                    <h1>Percentages</h1><br></br>
                    <h2><p><u>Quick Revision</u></p></h2><br></br>
                    <div className="tips">
                        <p className="def"><b></b> </p>
                        <p className="def"><b></b> </p>
                        <p className="def"><b></b> </p>
                        <p className="def"><b></b> </p><br></br>
                        
                        <h2><p><u> Questions for practise</u></p><br></br></h2> 
                        
                        <p className="def"><b> Q.1</b>In an election between two candidates, one got 55% of the total valid votes, 20% of the votes were invalid.<br></br> 
                        If the total number of votes was 7500, the number of valid votes that the other candidate got, was :<br></br>
                        <b>Sol.Total number of votes = 7500<br></br> 
                            Given that 20% of Percentage votes were invalid<br></br>
                            Valid votes = 80%<br></br>
                            Total valid votes = 7500*(80/100)<br></br> 
                            1st candidate got 55% of the total valid votes.<br></br> 
                            Hence the 2nd candidate should have got 45% of the total valid votes<br></br> 
                            Valid votes that 2nd candidate got = total valid votes x (45/100)<br></br>
                            7500*(80/100)*(45/100) = 2700</b></p><br></br>

                        <p className="def"><b> Q.2</b>A student multiplied a number by 3/5 instead of 5/3,
                             What is the percentage error in the calculation ?<br></br> 
                        <b>Sol.</b>Let the number be x.<br></br>
                            Then, ideally he should have multiplied by  x by 5/3. Hence Correct result was x * (5/3)= 5x/3.<br></br> 
                            By mistake he multiplied x by 3/5 . Hence the result with error  = 3x/5<br></br> 
                            Then, error = (5x/3 - 3x/5) = 16x/15<br></br>
                            Error %  = (error/True vaue) * 100 = [(16/15) * x/(5/3) * x] * 100 = 64 %</p><br></br>
                        
                        <p className="def"><b> Q.3</b>A student has to obtain 33% of the total marks to pass. He got 125 marks and failed by 40 marks. 
                            The maximum marks are : <br></br> 
                        <b>Sol.</b>Given that the student got 125 marks and still he failed by 40 marks<br></br>
                        The minimum pass mark = 125 + 40 = 165<br></br>
                        Given that minimum pass mark = 33% of the total mark<br></br>
                        total mark =33/100 =165<br></br>
                        total mark = 16500/33 = 500</p><br></br>

                        <p className="def"><b> Q.4</b>A man spends 35% of his income on food, 25% on children's education and 80% of the remaining on house rent. 
                            What percent of his income he is left with ?<br></br> 
                        <b>Sol.</b>et the total income be x.<br></br> 
                        Then, income left = (100 - 80)% of [100 -  (35 + 25)] % of x = 20% of 40% of x = [(20/100) * (40/100) * 100] % of x = 8 % of x.</p><br></br>

                        <p className="def"><b> Q.5</b>Fresh fruit contains 68% water and dry fruit contains 20% water.
                        How much dry fruit can be obtained from 100 kg of fresh fruits ? <br></br> 
                        <b>Sol. </b>The fruit content in both the fresh fruit and dry fruit is the same.<br></br>
                        Given, fresh fruit has 68% water.so remaining 32% is fruit content. weight of fresh fruits is 100kg<br></br>
                        Dry fruit has 20% water.so remaining 80% is fruit content.let weight if dry fruit be y kg.<br></br>
                        Fruit % in freshfruit = Fruit% in dryfruit <br></br>
                        Therefore, (32/100) x 100 = (80/100 ) x y<br></br> 
                        we get, y = 40 kg.</p><br></br>

                        
                        <h2><p><u> More Questions</u></p><br></br></h2>
                        
                        <p className="def"><b> Q.1</b> In ABC College, 63% of students are less than 20 years of age.<br></br> 
                        The number of students more than 20 years of age is 2/3 of number of students of 20 years of age which is 42.<br></br>
                        What is the total number of students in the ABC College? </p><br></br>

                        <p className="def"><b> Q.2</b>hree candidates, Ajay, Bijoy & Chandu contested an election and received 1800, 3300 and votes 3900 respectively.
                        What percent of the total votes did A get?  </p><br></br>

                        <p className="def"><b> Q.3</b>A report consists of 20 sheets each of 55 lines and each such line consists of 65 characters.<br></br>
                        This report is reduced onto sheets each of 65 lines such that each line consists of 70 characters.<br></br>
                        The percentage reduction in number of sheets is closest to:  </p><br></br>

                        <p className="def"><b> Q.4</b>2/5th of the voters promise to vote for A and the rest promised to vote for B.<br></br>
                        Of these, on the last day 15% of the voters went back of their promise to vote for A and 25% of voters went back of their promise to vote for B, and A lost by 200 votes.<br></br>
                        Then, the total number of voters is:  </p><br></br>

                        <p className="def"><b> Q.5</b>A person who has a certain amount with him goes to market.<br></br>
                        He can buy 50 oranges or 40 mangoes. He retains 10% of the amount for taxi fares and buys 20 mangoes and of the balance,<br></br>                              he purchases oranges. 
                        Number of oranges he can purchase is:  </p><br></br>
                        
                    </div>
            </div>

    )
}

export default Percentage;