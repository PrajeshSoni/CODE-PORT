import	java.io.*;
import java.sql.*;
import javax.sql.*;
class insert
{
	public static void main(String args[])
	{
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:studDSN");
			Statement stmt=conn.createStatement();
			int i=stmt.executeUpdate("insert into student values(4,'ddd','morbi')");
			if(i==1)
			{
				System.out.println("Record Inserted");
			}
			else
			{
				System.out.println("Record not Inserted");
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