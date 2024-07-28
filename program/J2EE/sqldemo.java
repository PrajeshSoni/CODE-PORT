import	java.io.*;
import java.sql.*;
import javax.sql.*;
class sqldemo
{
	public static void main(String args[])
	{
		try
		{
			Class.forName("com.mysql.jdbc.Driver");
			Connection conn=DriverManager.getConnection("jdbc:mysql://localhost:3306/student","root","");
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