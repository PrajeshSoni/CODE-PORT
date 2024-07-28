import java.io.*;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.sql.*;
import javax.sql.*;

class demo extends JFrame implements ActionListener
{
	Connection conn;
	Container con;
	
	Statement stmt;
	ResultSet rs;
	
	JPanel p1,p2,p3,p4,p5;
	JButton b1,b2,b3,b4,b5,b6,b7,b8,b9;
	JLabel l1,l2,l3,l4;
	JTextField t1,t2,t3;
	
	FlowLayout f1;
	
	demo()
	{
		con=getContentPane();
		f1=new FlowLayout(FlowLayout.LEFT);
		con.setLayout(f1);
		
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
		    conn=DriverManager.getConnection("jdbc:odbc:studDSN");
		    Statement stmt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_UPDATABLE);
		
		
		rs=stmt.executeQuery("select * from student");
		}
		catch(Exception e){}
		
		l1= new JLabel("rollno");
		l2= new JLabel("name");
		l3= new JLabel("city");
		l4= new JLabel("");
		
		t1=new JTextField(10);
		t2=new JTextField(15);
		t3=new JTextField(15);
		
		b1=new JButton("AddNew");
		b2=new JButton("Update");
		b3=new JButton("Delete");
		b4=new JButton("find");
		b5=new JButton("First");
		b6=new JButton("Previous");
		b7=new JButton("Next");
		b8=new JButton("Last");
		b9=new JButton("Save");
			
		
		
		p1=new JPanel();
		p2=new JPanel();
		p3=new JPanel();
		p4=new JPanel();
		p5=new JPanel();
		
		b1.addActionListener(this);
		b2.addActionListener(this);
		b3.addActionListener(this);
		b4.addActionListener(this);
		b5.addActionListener(this);
		b6.addActionListener(this);
		b7.addActionListener(this);
		b8.addActionListener(this);
		b9.addActionListener(this);
		
		p1.add(l1);
		p1.add(t1);
		p1.add(b4);
		
		p2.add(l2);
		p2.add(t2);

		p3.add(l3);
		p3.add(t3);
		
		p4.add(b5);
		p4.add(b6);
		p4.add(b7);
		p4.add(b8);
		
		p5.add(b1);
		p5.add(b9);
		p5.add(b2);
		p5.add(b3);
		p5.add(l4);
		
		con.add(p1);
		con.add(p2);
		con.add(p3);
		con.add(p4);
		con.add(p5);
		

	}
	public void actionPerformed(ActionEvent ae)
	{
		if(ae.getActionCommand()=="find")
		{
			try
			{
				int rno=Integer.parseInt(t1.getText());
				PreparedStatement ps1=conn.prepareStatement("select * from student where rollno=?");
				ps1.setInt(1,rno);
				ResultSet rs1=ps1.executeQuery();
				if(rs1.next())
				{	
					t2.setText(rs1.getString(2));
					t3.setText(rs1.getString(3));
				}
				rs1.close();
			}
			catch(Exception e)
			{
				l4.setText(""+e);
			}
		}
		if(ae.getActionCommand()=="First")
		{
			try
			{
				rs.first();
				t1.setText(""+rs.getInt(1));
				t2.setText(rs.getString(2));
				t3.setText(rs.getString(3));
			}
			catch(Exception e){}
		}
		if(ae.getActionCommand()=="Next")
		{
			try
			{
				rs.next();
				t1.setText(""+rs.getInt(1));
				t2.setText(rs.getString(2));
				t3.setText(rs.getString(3));
			}
			catch(Exception e){}
		}
		if(ae.getActionCommand()=="Previous")
		{
			try
			{
				rs.previous();
				t1.setText(""+rs.getInt(1));
				t2.setText(rs.getString(2));
				t3.setText(rs.getString(3));
			}
			catch(Exception e){}
		}
		if(ae.getActionCommand()=="Last")
		{
			try
			{
				rs.last();
				t1.setText(""+rs.getInt(1));
				t2.setText(rs.getString(2));
				t3.setText(rs.getString(3));
			}
			catch(Exception e){}
		}
		if(ae.getActionCommand()=="Save")
		{
			int rno=Integer.parseInt(t1.getText());
			String  nm=t2.getText();
			String  ct=t3.getText();
			try
			{
				Statement stmt1=conn.createStatement();
				int i=stmt1.executeUpdate("insert into student values("+rno+",'"+nm+"','"+ct+"')");
				conn.commit();
				stmt1.close();
				if(i==1)
				{
					l4.setText("data inserted");
				}
				else
				{
					l4.setText("data  not inserted");
				}
			}
			catch(Exception e){}
		}
		if(ae.getActionCommand()=="Update")
		{
			int rno=Integer.parseInt(t1.getText());
			String nm= t2.getText();
			String ct= t3.getText();
			try
			{
				PreparedStatement pstmt1=conn.prepareStatement("update student set name=?,city=? where rollno=?");
				pstmt1.setString(1,nm);
				pstmt1.setString(2,ct);
				pstmt1.setInt(3,rno);
				int i=pstmt1.executeUpdate();
				
				conn.commit();
				pstmt1.close();
				
				if(i==1)
				{
					l4.setText("data updated");
				}
				else
				{
					l4.setText("data  not updated");
				}
			}
			catch(Exception e){}
		}
		if(ae.getActionCommand()=="Delete")
		{
			int rno=Integer.parseInt(t1.getText());
			try
			{
				PreparedStatement pstmt2=conn.prepareStatement("delete from student where rollno=?");
				pstmt2.setInt(1,rno);
				int i=pstmt2.executeUpdate();
				
				conn.commit();
				pstmt2.close();
				
				if(i==1)
				{
					l4.setText("data deleted");
				}
				else
				{
					l4.setText("data  not deleted");
				}
			}
			catch(Exception e){}
		}
		if(ae.getActionCommand()=="AddNew")
		{
			t1.setText("");
			t2.setText("");
			t3.setText("");
		}
	}	
}
class demos 
{
		public static void main(String args[])
		{
			demo d=new demo();
			d.setSize(400,300);
			d.setVisible(true);
		}		
}
	