import React,{Component} from 'react';
import '../../css/Topics/topic.css';

const Probability= () => {
    return (
            <div className="main-heading">      
                    <h1>Probability</h1><br></br>
                    <h2><p><u>Quick Revision</u></p></h2><br></br>
                    <div className="tips">
                        <p className="def"><b>Probability:</b> It is the quantitative measure of the chance of occurrence of a particular event.<br></br>
                        It tells about the chance or likelihood of the occurrence of a particular event.<br></br>
                        It can be expressed as proportions that range from 0 to 1, or can also be expressed as percentages that range from 0% to 100%.<br></br> 
                        For example, a probability of 40 % (0.40) indicates<br></br>
                        that there are 40 chances out of 100 of the occurrence of an event. </p><br></br>

                        <p className="def"><b>Experiment:</b> It is an operation that can be infinitely repeated and has well-defined set of possible outcomes,<br></br>
                         which is known as a sample space. Each outcome is known as an event.<br></br>
                         For example, tossing a coin is an experiment that produces two well-defined outcomes: Head and Tail. </p><br></br>

                        <p className="def"><b>Exhaustive Events:</b> The mutually exclusive events that form the sample space collectively are called the exhaustive events. For example, when a coin is tossed, either Head or Tail appears and they collectively form the sample space.<br></br>
                         So, there are two exhaustive events. </p><br></br>

                        <p className="def"><b>Additional Theorem</b> Let A and B are two events associated with a random experiment.<br></br>
                        Then P (A U B) = P (A) + P (B) - P (A∩B), if P (A∩B) ≠ 0<br></br>
                        If A, and B are mutually exclusive events, P (A U B) = P (A) + P (B) as P (A∩B) = 0 for mutually exclusive events. </p><br></br>
                        
                        <h2><p><u> Questions for practise</u></p></h2><br></br> 
                        
                        <p className="def"><b> Q.1</b> What is the probability of getting an even number when a dice is rolled? <br></br>
                        <b>Sol. </b>The sample space when a dice is rolled, S = (1, 2, 3, 4, 5 and 6)<br></br>So, n (S) = 6<br></br>E is the event of getting an even number.<br></br>
                        So, n (E) = 3<br></br>So, the probability of getting an even number P (E) =total number of favorable outcomes/total number of outcomes<br></br>
                        =n(E)/n(S) = 3/6 = 1/2 </p><br></br>


                        <p className="def"><b> Q.2</b> What is the probability of getting two tails when two coins are tossed? <br></br> 
                        <b>Sol. </b>The sample space when two coins are tossed = (H, H), (H, T), (T, H), (T, T)<br></br>
                        So, n(S) = 4<br></br>The event "E" of getting two tails (T, T) = 1<br></br>
                        So, n(E) = 1<br></br>So, the probability of getting an even number P (E) =total number of favorable outcomes/total number of outcomes<br></br>
                        = n(E)/n(S)=1/4</p><br></br>
                        
                        <p className="def"><b> Q.3</b>  The tickets numbered from 1 to 20 are mixed up and then a ticket is drawn at random.<br></br>
                         What is the probability that the ticket has a number which is a multiple of 3 or 5? <br></br> 
                        <b>Sol. </b>The sample space, S= (1, 2, 3, 4, 5 ...18, 19, 20) or n(S) = 20<br></br>The event "E" of getting a multiple of 3 or 5 = (3, 6, 9, 12, 15, 18, 5, 10, 20) or n (E) = 9<br></br>
                        So, the probability of getting multiple of 3 or 5, P (E) =n(E)/n(S)=9/20 </p><br></br>

                        <p className="def"><b> Q.4</b>  In a bag, there are 8 red, 7 yellow and 6 green balls.<br></br> 
                        If one ball is picked up at random, what is the probability that it is neither red nor green?<br></br> 
                        <b>Sol. </b>Total number of balls or sample space = 8 + 7+ 6 =21<br></br>
                        So, n(S) = 21<br></br>Let E is the event that ball drawn is neither red nor green or event that the ball drawn is yellow.<br></br>
                        There are 7 yellow balls:<br></br>So, n (E) = 7<br></br>So,P(E)=n((E)/n(S)=7/21=1/3</p><br></br>

                        <p className="def"><b> Q.5</b> What is the probability of getting a sum 5 from two throws of a dice? <br></br> 
                        <b>Sol. </b>In two throws a dice, n (S) = 6 * 6 = 36<br></br>Let E is the event of getting a sum of five.<br></br>E = (1, 4), (4, 1), (2, 3), (3, 2)<br></br>
                        So, n (E) = 4<br></br>So, P (E) =n(E)/n(S)=4/36 or 1/9</p><br></br>

                        <p className="def"><b> Q.6</b> A man throws two dice simultaneously on the floor. What is the probability of getting two numbers whose product is even? <br></br> 
                        <b>Sol. </b>In a simultaneous throw of the two dice, the sample space, S = 6 * 6 = 36<br></br>
                        So, n (S) = 36<br></br>The event "E" = {(1, 2), (1, 4), (1, 6), (2, 1), (2, 2), (2, 3), (2, 4), (2, 5), (2, 6), (3, 2), (3, 4),
                        (3, 6), (4, 1), (4, 2), (4, 3), (4, 4), (4, 5), (4, 6), (5, 2), (5, 4), (5, 6), (6, 1),(6, 2), (6, 3), (6, 4), (6, 5), (6, 6)}<br></br>
                        So, n (E) = 27<br></br>P(E)=n(E)/n(S)=27/36=3/4</p><br></br>

                        <p className="def"><b> Q.7</b> In a lottery, there are 5 prizes and 35 blanks. If a lottery is drawn at random what will be the probability of getting a prize? <br></br> 
                        <b>Sol. </b>n (S)= 5 + 35=40<br></br>n (E)= 5<br></br>So, the probability of getting a prize, P (E) =n(E)/n(S)=5/40=1/8</p><br></br>

                        <p className="def"><b> Q.8</b> A card is drawn from a pack of 52 cards. What is the probability of getting a king of heart or a queen of club? <br></br> 
                        <b>Sol. </b>We have, n (S) = 52<br></br>The event of getting a king of heart or a queen of club = 2<br></br>
                        So, n (E) = 2<br></br>So,P(E)=n(E)/n(S)=2/52=1/26</p><br></br>

                        <h2><p><u> More Questions</u></p></h2><br></br>
                        
                        <p className="def"><b> Q.1 </b> A man tossed two dice. What is the probability that the total score is a prime number? </p><br></br>

                        <p className="def"><b> Q.2 </b> A box contains 4 white, 5 red, and 6 blue balls.<br></br> 
                        If three balls are drawn at random from the box, what is the probability that all of them are blue?  </p><br></br>

                        <p className="def"><b> Q.3 </b> A man draws two cards at random from a pack of 52 cards. What is the probability that one is a spade and the other is a heart?  </p><br></br>

                        <p className="def"><b> Q.4 </b> Ram draws one card at random from a pack of 52 cards. What is the probability that the card drawn is a face card (jack, queen and king only)?  </p><br></br>

                        <p className="def"><b> Q.5 </b> A man draws two cards together from a pack of 52 cards. What is the probability of both the cards being kings? </p><br></br>
                        
                    </div>
            </div>

    )
}

export default Probability;
