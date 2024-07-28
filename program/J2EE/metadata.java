import java.io.*;
import java.sql.*;
import javax.sql.*;
class metadata
{
	public static void main(String args[])
	{
		connection conn;
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:studDSN");
			DatabaseMetaData dbmd = conn.getMetaData();
			System.out.println(" " + dbmd.getDatabaseProductName());
			System.out.println(" " + dbmd.getConnection());
			System.out.println(" " + dbmd.getDriverName());
			Statement stmt=conn.createStatement();
			ResultSet rs;
			rs=stmt.executeQuery("Select *from student");
			while(rs.next())
			{
				System.out.println(" "+rs.getInt("rollno"));
				System.out.println(rs.getString("name"));
				System.out.println(rs.getString("city"));
			}
			rs.close();
			stmt.close();
			conn.close();
		}
		catch(Exception e)
		{
			System.out.println(" " + e);
		}
	}
}