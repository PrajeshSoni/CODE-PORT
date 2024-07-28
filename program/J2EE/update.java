import	java.io.*;
import java.sql.*;
import javax.sql.*;
class update
{
	public static void main(String args[])
	{
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:stud1DSN");
			Statement stmt=conn.createStatement();
			int i=stmt.executeUpdate("update student1 set sname='xyz',city='surat' where rollno=4");
			if(i==1)
			{
				System.out.println("Record Updated");
			}
			else
			{
				System.out.println("Record not Updated");
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