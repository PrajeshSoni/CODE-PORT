import	java.io.*;
import java.sql.*;
import javax.sql.*;
class delete
{
	public static void main(String args[])
	{
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:stud1DSN");
			Statement stmt=conn.createStatement();
			int i=stmt.executeUpdate("delete from student1 where rollno=4");
			if(i==1)
			{
				System.out.println("Record deleted");
			}
			else
			{
				System.out.println("Record not deleted");
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