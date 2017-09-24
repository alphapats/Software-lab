package lab14;
import java.util.Scanner;
import java.io.*;


public class CountPrimes {
        public static void main (String [] args) {
                
                System.out.println("ENTER UPPER BOUND");
                
                Scanner s = new Scanner (System.in);

                int bound = s.nextInt();
                long starttime = System.nanoTime();
                int num;
                int counter;
                int count=0;
                for(num =2;num<=bound;num++)
                {
                        counter=0;
                        int curr;
                        for (curr=2;curr<num;curr++)
                        {
                                if (num%curr == 0)
                                {
                                        counter=1;
                                }
                                
                        }
                        
                        if(counter == 0)
                        {
                                count=count+1;
                                
                        }
                }
                long endtime = System.nanoTime();
                long totaltime = endtime -starttime;
                
                System.out.println(bound + "\t"+count +"\t"+ totaltime);
                
                s.close();
                   
        }

}