import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.sql.*;
import javax.sql.*;

class winjdbc extends JFrame implements ActionListener
{
	Container con;
	JTextField jt1,jt2,jt3;
	JLabel jl1,jl2,jl3,jl4;
	JButton jb1,jb2;
	FlowLayout f1;
	
	winjdbc()
	{
		con = getContentPane();
		f1=new FlowLayout(FlowLayout.LEFT);
		con.setLayout(f1);
		jl1=new JLabel("Rollno");
		jl2=new JLabel("Name");
		jl3=new JLabel("city");
		jl4=new JLabel(" ");
		
		jt1=new JTextField(15);
		jt2=new JTextField(15);
		jt3=new JTextField(15);
		
		jb1=new JButton("delete");
		jb2=new JButton("cancle");
		
		jb1.addActionListener(this);
		jb2.addActionListener(this);
		
		con.add(jl1);
		con.add(jt1);
		
		con.add(jl2);
		con.add(jt2);
		
		con.add(jl3);
		con.add(jt3);
		
		con.add(jb1);
		con.add(jb2);
		con.add(jl4);
	}
	public void actionPerformed(ActionEvent ae)
	{
		if(ae.getActionCommand() == "delete")
		{
			int rno=Integer.parseInt(jt1.getText());
			String nm = jt2.getText();
			String ct = jt3.getText();
			try
			{
				Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
				Connection conn=DriverManager.getConnection("jdbc:odbc:stud1DSN");
				Statement stmt=conn.createStatement();
				int i=stmt.executeUpdate("delete from student1 where rollno="+rno+"");
				if(i==1)
				{
					jl4.setText("Record deleted");
				}
				else
				{
					jl4.setText("Record not deleted");
				}
			}
			catch(Exception e){}
		}
		if(ae.getActionCommand()=="Cancel")
		{
			jt1.setText(" ");
			jt2.setText(" ");
			jt3.setText(" ");
		}
	}
}
class winjdbcconnde
{
	public static void main(String args[])
	{
		winjdbc w1=new winjdbc();
		w1.setSize(300,250);
		w1.setVisible(true);
	}
}