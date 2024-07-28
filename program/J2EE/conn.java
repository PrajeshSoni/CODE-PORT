import java.io.*;
import java.sql.*;
class conn
{
	public static void main(String ar[])
	{
		Connection cn;
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			cn=DriverManager.getConnection("jdbc:odbc:myaccess");
			System.out.println("Database Connected");
		}
		catch(ClassNotFoundException ce)
		{
			System.out.println("Class not found: "+ce);
		}
		catch(SQLException se)
		{
			System.out.println("SQL ERROR: "+se);
		}
		catch(Exception e)
		{
			System.out.println(e);
		}
	}
}