import java.io.*;
import java.sql.*;
import javax.sql.*;
class cmdarg
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
			int i=stmt.executeUpdate("insert into student1 values("+rno+",'"+nm+"','"+ct+"')");
			if(i==1)
			{
				System.out.println("Record inserted");
			}
			else
			{
				System.out.println("Record not inserted");
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