package lab14;

import java.applet.Applet;
import java.awt.*;
import java.lang.*;
import java.awt.Point;
import java.awt.event.*;

public class ClickTriangle extends Applet 
       implements MouseListener, MouseMotionListener {

private int x,y,x1,y1,x2,x3,y2,y3;
private int currx,curry;
private int count;


public void init () {
       setBackground (Color.cyan);
       x=y=0;
       count = 0;
       addMouseListener (this);
       addMouseMotionListener (this);
}

public void paint (Graphics g) {
       g.drawString ("No of vertex selected:" + count + "  ",100,100);
       g.drawString ("Mouse last clicked at:" + x + "," + y, 100,150);
       g.drawString ("Current Mousse location:" + currx + "," + curry, 100,200);
       showStatus ("Applet Working!");
       if(count==2)
       {
               g.drawLine(x1,y1,x2,y2);
       }
       if(count==3)
       {
               g.drawLine(x1,y1,x2,y2);
               g.drawLine(x2,y2,x3,y3);
               g.drawLine(x3,y3,x1,y1);
       }
       if(count>3)
       {
               g.drawLine(x1,y1,x2,y2);
               g.drawLine(x2,y2,x3,y3);
               g.drawLine(x3,y3,x1,y1);
               g.drawString ("Only three vertixes can be selected",100,250);        
       }
       
}

public void mouseClicked (MouseEvent e) {
       count=count+1;
       x=e.getX();
       y=e.getY();
       
       if(count==1)
       {
               x1=e.getX();
               y1=e.getY();
       }
       
       if(count==2)
       {
               x2=e.getX();
               y2=e.getY();
               repaint();
               
       }
       if(count==3)
       {
               x3=e.getX();
               y3=e.getY();
               repaint();        
       }
       

               
}

public void mouseEntered (MouseEvent e){        
       
       repaint();                
}
public void mousePressed (MouseEvent e){        
       
       repaint();                
}
public void mouseReleased (MouseEvent e){        
       
       repaint();                
}
public void mouseExited (MouseEvent e){        
               repaint();                
}


public void mouseDragged (MouseEvent e) {

}

public void mouseMoved (MouseEvent e) {
       Point p= MouseInfo.getPointerInfo().getLocation();
       currx=p.x;
       curry=p.y;
       repaint();
}

}