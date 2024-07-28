import java.io.*;
import java.sql.*;
import javax.sql.*;
class oracledemo
{
	public static void main(String args[])
	{
		try
		{
			Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection conn=DriverManager.getConnection("jdbc:oracle:thin:@Localhost:1521:orcl","scott","tiger");
			Statement stmt=conn.createStatement();
			ResultSet rs;
			rs=stmt.executeQuery("select * from student");
			while(rs.next())
			{
				System.out.println(" "+rs.getInt("rollno"));
				System.out.println(rs.getString("name"));
				System.out.println(rs.getString("city"));
			
			}
		}
		catch(Exception e)
		{
			System.out.println(" "+e);
		}
		
	}
}