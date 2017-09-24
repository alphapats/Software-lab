import java.applet.Applet;
import java.awt.*;
import java.awt.Point;
import java.awt.event.*;
import java.util.*;

public class ClickPolygon extends Applet 
        implements MouseListener, MouseMotionListener {


private int currx,curry,lastx,lasty;
private int x1,y1,x2,y2;
private int flag=0;
Vector<Integer> x = new Vector<Integer>();
Vector<Integer> y = new Vector<Integer>();

private int count;


public void init () {
        setBackground (Color.cyan);
        lastx=lasty=0;
        count = 0;
        addMouseListener (this);
        addMouseMotionListener (this);
}

public void paint (Graphics g) {
        g.drawString ("No of vertex selected:" + count + "  ",100,100);
        g.drawString ("Mouse last clicked at:" + lastx + "," + lasty, 100,150);
        g.drawString ("Current Mousse location:" + currx + "," + curry, 100,200);
        showStatus ("Applet Working!");
        
        if(count>=2)
        {
                g.drawString ("X axis of Vertices are:" + x, 100,250);
                g.drawString ("Y Axis of Vertices are:" + y, 100,300);
                for(int i=0;i<x.size()-1;i++){
                    x1=(Integer)x.get(i);
                    y1=(Integer)y.get(i);
                    int j=i+1;
                    x2=(Integer)x.get(j);
                    y2=(Integer)y.get(j);
                        g.drawLine(x1,y1,x2,y2);
                }
        
                if(flag==1)
                {
                g.drawLine((Integer)x.firstElement(),(Integer)y.firstElement(),(Integer)x.lastElement(),(Integer)y.lastElement());
                
                }
                
        }
        
}

public void mouseClicked (MouseEvent e) {
        
        
        if(flag==0)
        {
                count=count+1;
                lastx=e.getX();
                lasty=e.getY();
        
        x.add((e.getX()));
        y.add((e.getY()));
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
         flag=1;
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