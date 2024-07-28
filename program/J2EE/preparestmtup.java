import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.sql.*;
import javax.sql.*;

class prepare extends JFrame implements ActionListener
{
	Container con;
	JTextField jt1,jt2,jt3;
	JLabel jl1,jl2,jl3,jl4;
	JButton jb1,jb2;
	FlowLayout f1;
	
	prepare()
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
		
		jb1=new JButton("save");
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
		if(ae.getActionCommand() == "save")
		{
			int rno=Integer.parseInt(jt1.getText());
			String nm = jt2.getText();
			String ct = jt3.getText();
			try
			{
				Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
				Connection conn=DriverManager.getConnection("jdbc:odbc:studDSN");
				PreparedStatement pstmt=conn.prepareStatement("update student set name=?,city=? where rollno=?");
				
				pstmt.setInt(3,rno);
				pstmt.setString(1,nm);
				pstmt.setString(2,ct);
				int i=pstmt.executeUpdate();
				if(i==1)
				{
					jl4.setText("Record updated");
				}
				else
				{
					jl4.setText("Record not updated");
				}
				pstmt.close();
				conn.close();
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
class preparestmtup
{
	public static void main(String args[])
	{
		prepare p1=new prepare();
		p1.setSize(300,250);
		p1.setVisible(true);
	}
}