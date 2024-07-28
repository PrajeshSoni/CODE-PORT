import java.sql.*;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
class stud extends JFrame implements ActionListener
{
	JLabel lblno,lblnm,lblct,lblmsg;
	JTextField txtno,txtnm,txtct;
	JButton btnins, btnupdate, btndelete, btnfirst, btnlast, btnprev, btnnext, btnexit;
	Connection cn;
	Statement st,st1;
	ResultSet rs;
	stud()
	{
		Container c=getContentPane();
		c.setLayout(null);
		lblno=new JLabel("Enter No: ");
		lblno.setBounds(10,40,180,30);
		c.add(lblno);
		txtno=new JTextField(3);
		txtno.setBounds(90,40,180,30);
		c.add(txtno);
		
		lblnm=new JLabel("Enter name: ");
		lblnm.setBounds(10,90,180,30);
		c.add(lblnm);
		
		txtnm=new JTextField(15);
		txtnm.setBounds(90,90,180,30);
		c.add(txtnm);
		
		lblct=new JLabel("Enter city: ");
		lblct.setBounds(10,140,180,30);
		c.add(lblct);
		
		txtct=new JTextField(15);
		txtct.setBounds(90,140,180,30);
		c.add(txtct);
		
		lblmsg=new JLabel("Error message");
		lblmsg.setBounds(550,550,500,100);
		c.add(lblmsg);
		btnins=new JButton("Insert");
		btnins.setBounds(140,190,100,30);
		c.add(btnins);
		
		btndelete=new JButton("Delete");
		btndelete.setBounds(190,190,120,30);
		c.add(btndelete);
		
		btnupdate=new JButton("Update");
		btnupdate.setBounds(240,190,150,30);
		c.add(btnupdate);
		
		btnfirst=new JButton("First");
		btnfirst.setBounds(290,190,180,30);
		c.add(btnfirst);
		
		btnlast=new JButton("Last");
		btnlast.setBounds(340,190,100,30);
		c.add(btnlast);
		
		btnprev=new JButton("Previous");
		btnprev.setBounds(390,190,100,30);
		c.add(btnprev);
		btnnext=new JButton("Next");
		btnnext.setBounds(440,190,100,30);
		c.add(btnnext);
		
		btnexit=new JButton("Exit");
		btnexit.setBounds(490,190,100,30);
		c.add(btnexit);
		btnins.addActionListener(this);
		btndelete.addActionListener(this);
		btnexit.addActionListener(this);
		btnprev.addActionListener(this);
		btnnext.addActionListener(this);
		btnupdate.addActionListener(this);
		btnfirst.addActionListener(this);
		btnlast.addActionListener(this);
		setSize(300,300);
		try
		{
			
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			cn=DriverManager.getConnection("jdbc:odbc:studdsn");
			st=cn.createStatement();
			st1=cn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_UPDATABLE);
			rs=st1.executeQuery("select * from student");
			
		}
		catch(ClassNotFoundException ce)
		{
			lblmsg.setText("Class not found: "+ce);
		}
		catch(SQLException se)
		{
			lblmsg.setText("SQL ERROR: "+se);
		}
		catch(Exception e)
		{
			lblmsg.setText(e.toString());
		}
	}
		public void actionPerformed(ActionEvent ae)
		{
			int no;
			String nm,ct,q;
			
			if(ae.getSource()==btnins)
			{
				try
				{
					
					no=Integer.parseInt(txtno.getText());
					nm=txtnm.getText().toString();
					ct=txtct.getText().toString();
					q="insert into student values("+no+",'"+nm+"','"+ct+"')";
					st.executeUpdate(q);
					cn.commit();
					lblmsg.setText("Record Inserted");
				}	
				catch(Exception e)
				{
					lblmsg.setText(e.toString());
				}	
			}
			if(ae.getSource()==btnupdate)
			{
				try
				{
					String nm1;
					no=Integer.parseInt(txtno.getText());
					nm=txtnm.getText().toString();
					nm1=txtnm.getText().toString();
					
					ct=txtct.getText().toString();
					q="update student set no="+no+",sname='"+nm1+"',scity='"+ct+"' where sname='"+nm+"'";		
					st.executeUpdate(q);
					cn.commit();
					lblmsg.setText("Record Updated");
				}	
				catch(Exception e)
				{
					lblmsg.setText(e.toString());
				}	
			}
			try
			{
			
				if(ae.getSource()==btnfirst)
				{
					rs.first();
					no=rs.getInt(1);
					nm=rs.getString(2);
					ct=rs.getString(3);
					txtno.setText(""+no);
					txtnm.setText(nm);
					txtct.setText(ct);
				}
				if(ae.getSource()==btnnext)
				{
					rs.next();
					no=rs.getInt(1);
					nm=rs.getString(2);
					ct=rs.getString(3);
					txtno.setText(""+no);
					txtnm.setText(nm);
					txtct.setText(ct);
				}
				if(ae.getSource()==btnprev)
				{
					rs.previous();
					no=rs.getInt(1);
					nm=rs.getString(2);
					ct=rs.getString(3);
					txtno.setText(""+no);
					txtnm.setText(nm);
					txtct.setText(ct);
				}
				if(ae.getSource()==btnlast)
				{
					rs.last();
					no=rs.getInt(1);
					nm=rs.getString(2);
					ct=rs.getString(3);
					txtno.setText(""+no);
					txtnm.setText(nm);
					txtct.setText(ct);
				}
				if(ae.getSource()==btnexit)
				{
					System.exit(0);
				}
			}
			catch(SQLException se)
			{
				lblmsg.setText("SQL ERROR: "+se);
			}
			catch(Exception e)
			{
				lblmsg.setText(e.toString());
			}
		}
	
}
public class form
{
	public static void main(String ar[])
	{
		stud s=new stud();
		s.setSize(300,300);
		s.setVisible(true);
	}
}
		