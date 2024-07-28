import java.io.*;
import java.sql.*;
import javax.sql.*;
class jdbcdemo1
{
	public static void main(String args[])
	{
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:studDSN");
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