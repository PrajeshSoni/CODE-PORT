import java.io.*;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.sql.*;
import javax.sql.*;

 class prg extends JFrame implements ActionListener
{
	Connection conn;
	Container con;
	
	Statement stmt;
	ResultSet rs;
	
	JPanel p1,p2,p3,p4,p5,p6,p7;
	JButton b1,b2,b3,b4,b5,b6,b7,b8,b9;
	JLabel l1,l2,l3,l4,l5,l6,l7;
	JTextField t1,t2,t3,t4,t5;
	
	FlowLayout f1;
	
	prg()
	{
		con=getContentPane();
		f1=new FlowLayout(FlowLayout.LEFT);
		con.setLayout(f1);
		
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
		    conn=DriverManager.getConnection("jdbc:odbc:bookDSN");
		    Statement stmt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_UPDATABLE);
		
		
		rs=stmt.executeQuery("select * from bookinfo");
		}
		catch(Exception e){}
		
		l1= new JLabel("BookId");
		l2= new JLabel("Bookname");
		l3= new JLabel("Author");
		l4= new JLabel("ISBNNo");
		l5=new JLabel("price");
		l6=new JLabel("");
		
		t1=new JTextField(10);
		t2=new JTextField(15);
		t3=new JTextField(15);
		t4=new JTextField(15);
		t5=new JTextField(15);
		
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
		p6=new JPanel();
		p7=new JPanel();
		
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
		
		
		p4.add(l4);
		p4.add(t4);
		
		
		p5.add(l5);
		p5.add(t5);
		
		
		p6.add(b5);
		p6.add(b6);
		p6.add(b7);
		p6.add(b8);
		
		p7.add(b1);
		p7.add(b9);
		p7.add(b2);
		p7.add(b3);
		p7.add(l6);
		
		con.add(p1);
		con.add(p2);
		con.add(p3);
		con.add(p4);
		con.add(p5);
		con.add(p6);
		con.add(p7);
		

	}
	public void actionPerformed(ActionEvent ae)
	{
		if(ae.getActionCommand()=="find")
		{
			try
			{
				int bid=Integer.parseInt(t1.getText());
				PreparedStatement ps1=conn.prepareStatement("select * from bookinfo where BookId=?");
				ps1.setInt(1,bid);
				ResultSet rs1=ps1.executeQuery();
				if(rs1.next())
				{	
					t2.setText(rs1.getString(2));
					t3.setText(rs1.getString(3));
					t4.setText(rs1.getString(4));
					t5.setText(rs1.getString(5));
				}
				rs1.close();
			}
			catch(Exception e)
			{
				l6.setText(""+e);
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
				t4.setText(rs.getString(4));
				t5.setText(rs.getString(5));
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
				t4.setText(rs.getString(4));
				t5.setText(rs.getString(5));
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
				t4.setText(rs.getString(4));
				t5.setText(rs.getString(5));
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
				t4.setText(rs.getString(4));
				t5.setText(rs.getString(5));
			}
			catch(Exception e){}
		}
		if(ae.getActionCommand()=="Save")
		{
			int bid=Integer.parseInt(t1.getText());
			String  bnm=t2.getText();
			String  ba=t3.getText();
			String  ino=t4.getText();
			String  pr=t5.getText();
			try
			{
				Statement stmt1=conn.createStatement();
				int i=stmt1.executeUpdate("insert into bookinfo values("+bid+",'"+bnm+"','"+ba+"','"+ino+"',"+pr+")");
				conn.commit();
				stmt1.close();
				if(i==1)
					
				{
					l6.setText("data inserted");
				}
				else
				{
					l6.setText("data  not inserted");
				}
			}
			catch(Exception e){}
		}
		if(ae.getActionCommand()=="Update")
		{
			int bid=Integer.parseInt(t1.getText());
			String  bnm=t2.getText();
			String  ba=t3.getText();
			String  ino=t4.getText();
			String  pr=t5.getText();
	
			try
			{

				/*PreparedStatement pstmt1=conn.prepareStatement("update bookinfo set BookName=?,Author=?ISBNNo=?,Price=? where BookId=?");
				
				pstmt1.setString(1,bnm);
				pstmt1.setString(2,ba);
				pstmt1.setString(3,ino);
				pstmt1.setString(4,pr);
				pstmt1.setInt(5,bid);
				int i=pstmt1.executeUpdate();
				
				conn.commit();
				pstmt1.close();
				
				if(i==1)
				{
					l6.setText("data updated");
				}
				else
				{
					l6.setText("data  not updated");
				}
			}
			catch(Exception e){}*/
				Statement stmt2=conn.createStatement();
			
			int i=stmt2.executeUpdate("update studinfo set BookName='"+bnm"',Author= where rollno=1");
		if(i==1)
		{
			System.out.println("record updated");
		}
		else
		{
			System.out.println("record not updated");
		}
			stmt.close();
			conn.close();
		}
		catch(Exception e)
		{
			System.out.println(""+e);
		}
		}
		if(ae.getActionCommand()=="Delete")
		{
			int bid=Integer.parseInt(t1.getText());
			
			try
			{

				PreparedStatement pstmt2=conn.prepareStatement("delete from bookinfo where BookId=?");
				
				
				pstmt2.setInt(1,bid);
				int i=pstmt2.executeUpdate();
				
				conn.commit();
				pstmt2.close();
				
				if(i==1)
				{
					l6.setText("data deleted");
				}
				else
				{
					l6.setText("data  not deleted");
				}
			}
			catch(Exception e){}
		}
		if(ae.getActionCommand()=="AddNew")
		{
			t1.setText("");
			t2.setText("");
			t3.setText("");
			t4.setText("");
			t5.setText("");
			
		
		}
	}	
}
class bookdetail
{
		public static void main(String args[])
		{
			prg b= new prg();
			b.setSize(400,300);
			b.setVisible(true);
		}
	
		
}
	