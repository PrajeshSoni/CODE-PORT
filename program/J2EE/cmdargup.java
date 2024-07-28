import java.io.*;
import java.sql.*;
import javax.sql.*;
class cmdargup
{
	public static void main(String args[])
	{
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:stud1DSN");
			Statement stmt=conn.createStatement();
			int rno=Integer.parseInt(args[0]);
			String nm = args[1];
			String ct = args[2];
			
			int i=stmt.executeUpdate("update student1 set sname='"+nm+"',city='"+ct+"' 
					where rollno="+rno+"");
					
			if(i==1)
			{
				System.out.println("Record updated");
			}
			else
			{
				System.out.println("Record not updated");
			}
			stmt.close();
			conn.close();
		}
		catch(Exception e)
		{
			System.out.println(" "+e);
		}
	}
}